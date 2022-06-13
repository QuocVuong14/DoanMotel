<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
use App\Http\Middleware\EnsureTokenIsValid;


use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\PostController;




Route::prefix('admin') ->group(function(){
    //account
    Route::put('/account/update-status', [ExamController::class, 'UpdateStatus']);
    Route::put('/account/update-password', [ExamController::class, 'UpdatePassword']);

    //motel


    Route::put('/post/update-status', [PostController::class, 'UpdateStatus']);
    Route::put('/post/update-stt', [PostController::class, 'UpdateStt']);




});

//end





Route::post("login",[UserController::class,'login']);
Route::post("store",[UserController::class,'store']);



Route::get("/products",[ProductController::class,'index']);
Route::get("/products/search",[ProductController::class,'search']);
Route::get("/products/show/{id}",[ProductController::class,'show']);



Route::group(['middleware' => [] ], function(){


    Route::get("member",[UserController::class,'member']);
    Route::post("logout",[UserController::class,'logout']);

    Route::post("/products/store",[ProductController::class,'store']);
    Route::put("/products/update/{id}",[ProductController::class,'update']);
    Route::post("/products/destroy/{id}",[ProductController::class,'destroy']);


    // Route::group(['prefix' => 'orders' ], function(){
    //     Route::get("/",[OrderController::class,'index']);
    //     Route::get("/edit/{id}",[OrderController::class,'edit']);
    //     Route::put('/update/{id}', [OrderController::class, 'update']) ;

    // });

    // //////////// this is cart
    // Route::group(['prefix' => 'cart' ], function(){
    //     Route::get("/",[CartController::class,'index']);
    //     Route::post("/{id}",[CartController::class,'store']) -> name('cart.store');


    // });

});

