<?php

namespace App\Models;

use Archetype\Endpoints\Laravel\HasMany;
use Illuminate\Database\Eloquent\Model;

class BookingApplication extends Model
{
    protected $fillable = [
        'firstname',

        'lastname',
        'email',
        'phone',
        'attendees',
        'room',
        'type',
        'date',
    ];
    protected $table = 'booking_applications';

    public function attendee(): HasMany
    {
        return $this->hasMany(Attendee::class);
    }
}
