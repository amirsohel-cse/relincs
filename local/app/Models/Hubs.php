<?php

namespace App\Models;

use App\Models\rating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hubs extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "hubs";

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo(){
        return asset('storage/storage/profile_hubs/'.$this->profile);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rating()
    {
        return $this->hasMany(rating::class);
    }

    public function hubmedia()
    {
        return $this->hasMany(HubMedia::class);
    }

    public function hubwall()
    {
        return $this->hasMany(HubWall::class);
    }

    public function hubbulletin()
    {
        return $this->hasMany(hubbulletin::class);
    }
}
