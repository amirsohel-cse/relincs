<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    
    public $guarded= [];
    public $timestamps= false;

    public function video(){
        return $this->belongsTo(Video::class);
    }
}
