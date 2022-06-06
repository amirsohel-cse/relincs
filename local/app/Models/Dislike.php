<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    use HasFactory;
    
    public $guarded= [];
    public $timestamps= false;

    public function video(){
        return $this->belongsTo(Video::class);
    }
}
