<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillables =[
        'name',
    ];

    public function Schedules(){
        return $this->belongsTo('App\Models\Schedule');
    }
}
