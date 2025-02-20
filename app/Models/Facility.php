<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Airline extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'image',
        'name',
        'description'
    ];

    public function facilities() {
        return $this->belongsToMany(FlightClass::class, 'flight_class_facility', 'facility_id', 'flight_class_id');
    }
}
