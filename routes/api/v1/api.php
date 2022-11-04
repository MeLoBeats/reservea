<?php

use App\Http\Controllers\v1\OfferController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('offers', OfferController::class);
});
