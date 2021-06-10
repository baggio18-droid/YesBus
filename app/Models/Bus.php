<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'capacity',
    ];

    public function routes(){
        return $this->belongsTo('App\Models\Route', 'route_id');
    }
    public function schedules(){
        return $this->belongsTo('App\Models\Schedule');
    }
}
