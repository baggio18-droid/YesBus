<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table='buses';
    protected $primarykey= 'id';

    protected $fillables = [
        'name',
        'category_id',
        'capacity',
    ];

    public function categories(){
        return $this->belongsTo('App\Models\Category');
    }
    public function schedules(){
        return $this->belongsTo('App\Models\Schedule');
    }
}
