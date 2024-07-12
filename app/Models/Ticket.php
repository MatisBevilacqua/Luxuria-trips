<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'title', 'description', 'price_per_person', 'event_date'
    ];

    // Relation avec les réservations de ticket
    public function ticketReservations()
    {
        return $this->hasMany(TicketReservation::class);
    }
}
