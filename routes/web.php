<?php

use App\Http\Controllers\Backend\BookingApplicationController;
use Illuminate\Support\Facades\Route;
use Mpdf\Mpdf;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/pdf', function () {
    $mpdf = new Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4',
    ]);
    $html = view('pdf.booking-sheet')->render();
    $mpdf->WriteHTML($html);

    return response($mpdf->Output('', 'S'))
        ->header('Content-Type', 'application/pdf');
});

Route::group(['middleware' => ['web'], 'prefix' => '/backstage'], function () {
    Route::group(['prefix' => '/booking'], function () {
        Route::get('/', [BookingApplicationController::class, 'index'])->name('backstage.booking.index');
    });
});
