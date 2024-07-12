<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketReservation extends Model
{
    protected $fillable = [
        'ticket_id', 'quantity', 'total_price', 'reservation_date'
    ];

    // Relation avec le ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
