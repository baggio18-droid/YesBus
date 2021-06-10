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

    public function orders(){
        return $this->belongsTo('App\Models\Schedule');
    }
}
