<?php

namespace App\Models;

use App\Models\User;
use App\Models\MarkWall;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'wall';

    public function getRouteKeyName()
    {
        return 'uid';
    }

    public function getThumbnailAttribute()
    {
        if($this->thumbnail_image === NULL && $this->processed_file === NULL) {
            return asset($this->path);
        } else {
            return asset('storage/video/' . $this->uid . '/' . $this->processed_file);
        }
    }

    public function getThumbnail()
    {
        if($this->processed_file === NULL){
            return asset("storage/".$this->path);
        }else{
            if($this->thumbnail_image === NULL){

                return asset("img/choose_avatar.jpg");
            }else{
                return asset('storage/video/' . $this->uid . '/' . $this->thumbnail_image);
            }
        }
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

    public function Likes()
    {
        return $this->hasMany(Like::class);
    }

    public function Dislikes()
    {
        return $this->hasMany(Dislike::class);
    }

    public function doesUserLikedVideo()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function doesUserDislikedVideo()
    {
        return $this->Dislikes()->where('user_id', auth()->id())->exists();
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class)->whereNull('replay_id');
    }

    public function commentAllCount()
    {
        return $this->hasMany(Comment::class)->count();
    }

    public function marks()
    {
        return $this->hasMany(MarkWall::class);
    }

    public function doesUsermarkedVideo()
    {
        return $this->marks()->where('user_id', auth()->id())->exists();
    }

}
