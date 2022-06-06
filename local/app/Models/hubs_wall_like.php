<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hubs_wall_like extends Model
{
    use HasFactory;

    public $guarded= [];
    public $timestamps= false;

    public function hunwall(){
        return $this->belongsTo(HubWall::class);
    }
}
