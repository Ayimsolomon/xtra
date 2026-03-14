<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
protected $fillable = ['car_id', 'user_email', 'departure_location', 'destination', 'departure_time', 'passengers'];

public function car() {
    return $this->belongsTo(Car::class);
}
}
