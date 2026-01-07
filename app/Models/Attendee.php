<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendee extends Model
{
    protected $table = 'attendees';

    public function application(): BelongsTo
    {
        return $this->belongsTo(BookingApplication::class);
    }
}
