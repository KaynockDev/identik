<?php

use App\Http\Controllers\TestController;
use App\Http\Middleware\LocalizationMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;



Route::get('/turkce', function () {

    session(['locale' => "tr"]);
    App::setLocale("tr");


    return redirect()->back();
});


Route::get('/english', function () {

    session(['locale' => "en"]);
    App::setLocale("en");


    return redirect()->back();
});


Route::middleware(LocalizationMiddleware::class)->group(function () {

    Route::view("/", "index")->name("index");
    Route::view("/guluslerimiz", "smiles")->name("smiles");
    Route::view("/tedavilerimiz", "treatments")->name("treatments");
    Route::view("/doktorlarimiz", "doctors")->name("doctors");
    Route::view("/tedavilerimiz/{slug}", "treatments")->name("treatment");
    Route::view("/doktorlarimiz/{slug}", "doctors")->name("doctor");
    Route::view("/sss", "faq")->name("faq");
    Route::view("/kvkk", "kvkk")->name("kvkk");
    Route::view("/gizlilik-sozlesmesi", "privacy")->name("privacy");
    Route::get("/test", [TestController::class, "index"])->name("test");
});
