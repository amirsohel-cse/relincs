<?php

namespace App\Models;

use App\Models\Video;
use App\Models\CommentVideo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    // 'firstname',
    // 'lastname',
    // 'email',
    // 'image_profile',
    // 'data_birth',
    // 'coutry',
    // 'city',
    // 'username',
    // 'gender',
    // 'password',

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function profile()
    {
        if($this->image_profile != ''){
            return 'https://relincsca.s3.amazonaws.com/profile_image/'.$this->image_profile.'';
        }
        else{
            return asset('storage/storage/img/default.png');
        }

    }

    public function name()
    {
        return $this->username;
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function Following()
    {
        return $this->hasMany(Following::class);
    }

    public function Subscribe()
    {
        return $this->hasMany(Subscribe::class);
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function wallcomment()
    {
        return $this->hasMany(hubswallcomment::class);
    }

    public function CommentMedia()
    {
        return $this->hasMany(CommentMedia::class);
    }

    public function CommentVideo()
    {
        return $this->hasMany(CommentVideo::class);
    }

    public function hubs()
    {
        return $this->hasMany(Hubs::class);
    }

    public function hubmedia()
    {
        return $this->hasMany(HubMedia::class);
    }

    public function messages()
    {
        return $this->hasMany(messages::class);
    }

    public function checkAdmin()
    {
        return auth()->user()->username === 'admin' && auth()->user()->email === 'admin@gmail.com';
    }

    public function getFollowersAttribute()
    {
        return Following::where('following_id', $this->user->id)->count();
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
