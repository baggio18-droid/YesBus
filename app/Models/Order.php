<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillables = [
        'schedule_id',
        'CustomerName',
        'email',
        'phone',
    ];
    public function buses(){
        return $this->belongsTo('App\Models\Bus', 'bus_id');
    }

    public function routes(){
        return $this->belongsTo('App\Models\Route', 'route_id');
    }
    public function schedules(){
        return $this->belongsTo('App\Models\Schedule', 'schedule_id');
    }
}
