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
    Route::get("/blog", function () {
        $locale = app()->getLocale();
        $blogs = \App\Models\Blog::whereNotNull('published_at')->orderBy('sort')->get();
        return view('blogs', ['blogs' => $blogs]);
    })->name("blogs");
    
    Route::get("/blog/{slug}", function ($slug) {
        $locale = app()->getLocale();
        $blogs = \App\Models\Blog::whereNotNull('published_at')->orderBy('sort')->get();
        
        // Locale'e göre slug eşleştirmesi
        $selectedBlog = null;
        if ($locale === 'en') {
            $selectedBlog = $blogs->firstWhere('slug_en', $slug) ?? $blogs->firstWhere('slug_tr', $slug);
        } else {
            $selectedBlog = $blogs->firstWhere('slug_tr', $slug) ?? $blogs->firstWhere('slug_en', $slug);
        }
        
        if (!$selectedBlog) {
            abort(404);
        }
        
        return view('blogs', ['blogs' => $blogs, 'selectedBlog' => $selectedBlog]);
    })->name("blog");
    Route::view("/sss", "faq")->name("faq");
    Route::view("/kvkk", "kvkk")->name("kvkk");
    Route::view("/gizlilik-sozlesmesi", "privacy")->name("privacy");
    Route::get("/test", [TestController::class, "index"])->name("test");
});
