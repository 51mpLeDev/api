<?php


use Firdavs\Api\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'restaurant/api/'],function (){
    Route::get('get-menu', [MenuController::class, 'getMenusItems']);
    Route::post('update-menu-prices', [MenuController::class, 'updateMenusPrices']);
});

