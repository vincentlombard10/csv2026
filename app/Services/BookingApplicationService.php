<?php

namespace App\Services;

use App\Models\BookingApplication;
use DB;
use Illuminate\Support\Facades\Log;

class BookingApplicationService
{
    /**
     * @throws \Throwable
     */
    public function create(array $data): BookingApplication|null
    {
        $bookingApplication = null;
        DB::beginTransaction();
        try {
            DB::commit();
            $bookingApplication = BookingApplication::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'attendees' => $data['attendees'],
                'room' => $data['room'],
                'type' => $data['type'],
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollback();
        }

        return $bookingApplication;
    }
}
