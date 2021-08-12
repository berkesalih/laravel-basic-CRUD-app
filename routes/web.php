<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
 * <summary>
 * Bu kod bloğunda bizden istenen 4 grubun route işlemleri gerçekleştirildi.Bu işlemlerin okunabilirliğinin artması
 * için prefix ile routelar gruplanmış ve düzgün bir biçimde oluşturuldu.
 * </summary>
 *  */
Route::get("/",[Controller::class,"index"]);
Route::prefix('admin')->name("admin.")->group(function () {
    Route::prefix("category")->name("category.")->group(function (){
        Route::get("index",[CategoryController::class,"index"])->name("index");
        Route::get("edit/{edit?}",[CategoryController::class,"edit"])->name("edit");
        Route::post("edit/{edit?}",[CategoryController::class,"add"]);
        Route::put("edit/{edit}",[CategoryController::class,"update"]);
        Route::get("delete/{delete}",[CategoryController::class,"delete"])->name("delete");
    });
    Route::prefix("product")->name("product.")->group(function (){
        Route::get("index",[ProductController::class,"index"])->name("index");
        Route::get("edit/{edit?}",[ProductController::class,"edit"])->name("edit");
        Route::post("edit/{edit?}",[ProductController::class,"add"]);
        Route::put("edit/{edit}",[ProductController::class,"update"]);
        Route::get("delete/{delete}",[ProductController::class,"delete"])->name("delete");
    });
    Route::prefix("user")->name("user.")->group(function (){
        Route::get("index",[UserController::class,"index"])->name("index");
        Route::get("edit/{edit?}",[UserController::class,"edit"])->name("edit");
        Route::post("edit/{edit?}",[UserController::class,"add"]);
        Route::put("edit/{edit}",[UserController::class,"update"]);
        Route::get("delete/{delete}",[UserController::class,"delete"])->name("delete");
    });
    Route::prefix("cart")->name("cart.")->group(function (){
        Route::get("index",[CartController::class,"index"])->name("index");
        Route::get("edit/{edit?}",[CartController::class,"edit"])->name("edit");
        Route::post("edit/{edit?}",[CartController::class,"add"]);
        Route::put("edit/{edit}",[CartController::class,"update"]);
        Route::get("delete/{delete}",[CartController::class,"delete"])->name("delete");
    });
});
