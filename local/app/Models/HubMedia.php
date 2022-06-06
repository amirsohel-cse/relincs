<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HubMedia extends Model
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
            return 'storage/mediahubs/' . $this->uid . '/' . $this->thumbnail_image;
        } else {
            return 'storage/video/default.jpeg';
        }
    }

    public function video()
    {
            return 'storage/mediahubs/' . $this->uid . '/' . $this->processed_file;
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

    public function Comments()
    {
        return $this->hasMany(CommentMedia::class)->whereNull('replay_id');
    }
    public function rates()
    {
        return $this->hasMany(rating::class,'hub_id');
    }

    public function hubs()
    {
        return $this->belongsTo(Hubs::class);
    }

}
