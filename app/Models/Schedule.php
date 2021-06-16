<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'bus_id',
        'departure_time',
        'scheduled_arrival_time',
        'Price'
    ];
    public function buses(){
        return $this->belongsTo('App\Models\Bus', 'bus_id');
    }
    public function routes(){
        return $this->belongsTo('App\Models\Route', 'route_id');
    }

    public function orders(){
        return $this->hasOne('App\Models\Order');
    }
}
