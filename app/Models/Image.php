<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url', 'car_id', 'yacht_id'
    ];

    // Relation avec les voitures
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Relation avec les yachts
    public function yacht()
    {
        return $this->belongsTo(Yacht::class);
    }
}
