<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BookingApplicationController extends Controller
{
    public function index()
    {
        return view('backend.booking.index');
    }
}
