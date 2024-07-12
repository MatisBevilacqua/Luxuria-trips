<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReservation extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'email'
    ];

    // Relation avec les réservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
