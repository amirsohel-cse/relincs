<?php

namespace App\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentVideo extends Model
{
    use HasFactory;
    protected $table = 'comment_v';
    protected $guarded = [];
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->belongsTo(Media::class);
    }

    public function Replaies()
    {
        return $this->hasMany(CommentVideo::class, 'replay_id', 'id');
    }
}
