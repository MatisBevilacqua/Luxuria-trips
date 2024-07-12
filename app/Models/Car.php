<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'description', 'location', 'price_per_hour', 'city'
    ];

    // Relation avec les réservations de voiture
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    // Relation avec les images
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
