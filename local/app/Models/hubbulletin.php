<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hubbulletin extends Model
{
    use HasFactory;

    protected $table = 'hub_bulletins';
    protected $guarded = [];

    public function hubs(){
        return $this->belongsTo(Hubs::class);
    }
}
