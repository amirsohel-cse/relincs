<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentMedia extends Model
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

    public function hubmedia()
    {
        return $this->belongsTo(HubMedia::class);
    }

    public function Replaies()
    {
        return $this->hasMany(CommentMedia::class, 'replay_id', 'id');
    }
}
