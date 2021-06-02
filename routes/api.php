<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/



Route::middleware('api')->group(function () {

    Route::resource('products', ProductController::class);
    
});
