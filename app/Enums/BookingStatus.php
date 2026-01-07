<?php

namespace App\Enums;

enum BookingStatus: string
{
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case APPROVED = 'APPROVED';
}
