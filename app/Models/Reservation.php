<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'client_reservation_id', 'start_time', 'end_time', 'reservation_date',
        'total', 'car_id', 'yacht_id', 'is_paid'
    ];

    // Relation avec la réservation client
    public function clientReservation()
    {
        return $this->belongsTo(ClientReservation::class);
    }

    // Relation avec la voiture
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Relation avec le yacht
    public function yacht()
    {
        return $this->belongsTo(Yacht::class);
    }
}
