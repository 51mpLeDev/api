<?php


use Firdavs\Api\Controllers\LocationController;
use Firdavs\Api\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'restaurant/api/'],function (){
    Route::get('get-menu', [MenuController::class, 'getMenusItems']);
    Route::get('get-allergens', [MenuController::class, 'getAllergens']);
    Route::post('update-menu-prices', [MenuController::class, 'updateMenusPrices']);
    Route::get('download-pdf/{id}', [LocationController::class, 'downloadPdf']);
});

