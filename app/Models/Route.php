<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function buses(){
        return $this->hasMany('App\Models\Bus');
    }
    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

    protected $fillable = [
        'name',
        'departure',
        'destination',
    ];
}
