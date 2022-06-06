<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileMarked extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class,'markkard_id','markshod_id');
    }

}
