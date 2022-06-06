<?php

namespace App\Models;

use App\Models\Hubs;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rating extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hubs(){
        return $this->belongsTo(Hubs::class);
    }

    public function hubmedia(){
        return $this->belongsTo(HubMedia::class);
    }
}
