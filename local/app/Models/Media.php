<?php

namespace App\Models;

use App\Models\User;
use App\Models\like_m;
use App\Models\dislike_m;
use App\Models\CommentVideo;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uid';
    }

    public function getThumbnailAttribute()
    {
        if ($this->thumbnail_image) {
            return 'storage/media/' . $this->uid . '/' . $this->thumbnail_image;
        } else {
            return 'storage/storage/img/default.jpeg';
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


    public function Likes_m()
    {
        return $this->hasMany(like_m::class);
    }

    public function Dislikes_m()
    {
        return $this->hasMany(dislike_m::class);
    }

    public function doesUserLikedVideo()
    {
        return $this->Likes_m()->where('user_id', auth()->id())->exists();
    }

    public function doesUserDislikedVideo()
    {
        return $this->Dislikes_m()->where('user_id', auth()->id())->exists();
    }

    public function Comments()
    {
        return $this->hasMany(CommentVideo::class)->whereNull('replay_id');
    }

}
