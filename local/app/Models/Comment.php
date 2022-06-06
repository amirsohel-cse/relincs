<?php

namespace App\Models;

use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Video()
    {
        return $this->belongsTo(Video::class);
    }

    public function Replaies()
    {
        return $this->hasMany(Comment::class, 'replay_id', 'id');
    }
}
