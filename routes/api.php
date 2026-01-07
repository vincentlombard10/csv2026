<?php

use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\GalleryController;
use App\Http\Controllers\API\OfferController;
use App\Http\Controllers\API\RoomController;

Route::group([
    'namespace' => 'Api',
    #'middleware' => 'api.token'
], function () {
   Route::group(['prefix' => '/rooms', 'as' => 'rooms.'], function () {
       Route::get('/', [RoomController::class, 'getRooms'])
           ->name('all');
   });
   Route::group(['prefix' => 'events', 'as' => 'events.'], function () {
       Route::get('/', [EventController::class, 'getEvents'])
           ->name('all');
   });
   Route::prefix('galleries')->group(function () {
       Route::get('/', [GalleryController::class, 'getGalleries'])
           ->name('all');
   });
   Route::prefix('offers')->group(function () {
       Route::get('/', [OfferController::class, 'getOffers'])
           ->name('all');
   });
});
