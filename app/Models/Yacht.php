<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yacht extends Model
{
    protected $fillable = [
        'name', 'description', 'price_per_hour', 'location', 'city'
    ];

    // Relation avec les réservations de yacht
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
