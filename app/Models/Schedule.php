<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillables =[
        'bus_id',
        'placeDeparture_id',
        'placeDestination_id',
        'departureTime',
        'arrivalTime',
        'Price'
    ];
    public function buses(){
        return $this->belongsTo('App\Models\Bus');
    }
    public function places(){
        return $this->hasOne('App\Models\Place');
    }

    public function orders(){
        return $this->hasOne('App\Models\Order');
    }
    
}
