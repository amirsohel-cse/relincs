<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HubWall extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uid';
    }

    public function getThumbnailAttribute()
    {
        return asset('storage/'.$this->path);

        // if ($this->thumbnail_image) {
        //     return 'hubs/media/' . $this->uid . '/' . $this->thumbnail_image;
        // } else {
        //     return '/video/default.jpeg';
        // }
    }

    public function date_string()
    {
        //  Convert To String Date
        $d = new Carbon($this->created_at);
        return $d->toFormattedDateString();
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function hubs()
    {
        return $this->belongsTo(Hubs::class);
    }

    public function Likes()
    {
        return $this->hasMany(hubs_wall_like::class,'video_id');
    }

    public function Dislikes()
    {
        return $this->hasMany(hubs_wall_dislike::class,'video_id');
    }

    public function doesUserLikedVideo()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function doesUserDislikedVideo()
    {
        return $this->Dislikes()->where('user_id', auth()->id())->exists();
    }

    // public function doesUsermarkedVideo()
    // {
    //     return $this->Dislikes()->where('user_id', auth()->id())->exists();
    // }

    public function Comments()
    {
        return $this->hasMany(hubswallcomment::class,'video_id')->whereNull('replay_id');
    }

    public function commentAllCount()
    {
        return $this->hasMany(hubswallcomment::class,'video_id')->count();
    }
}
