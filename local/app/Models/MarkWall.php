<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarkWall extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $timestamps= false;

    public function videos(){
        return $this->belongsTo(Video::class);
    }

}
