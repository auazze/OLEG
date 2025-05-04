<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::view("/", "home");

Route::redirect("/home", "/", 301);

Route::get("/test", TestController::class);

Route::view("/about", "about");








// эта штука д.б. в самом низу, чтобы ничего не перекрывать
Route::fallback(function () {
    return view("home");
});
