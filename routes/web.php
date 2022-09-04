<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.home'));

Route::prefix('/activities')->group(function () {
    Route::get('/', fn() => view('pages.activities'));

    Route::get('/development-electronic-devices', fn() => view('pages.activities.development-electronic-devices'));

    Route::get('/technological-processes', fn() => view('pages.activities.technological-processes'));

    Route::get('/measurement-of-quantities', fn() => view('pages.activities.measurement-of-quantities'));

    Route::get('/electrical-panels', fn() => view('pages.activities.electrical-panels'));

    Route::get('/software-development', fn() => view('pages.activities.software-development'));

    Route::get('/machinery-and-equipment', fn() => view('pages.activities.machinery-and-equipment'));

    Route::get('/production-systems', fn() => view('pages.activities.production-systems'));

    Route::get('/electrical-components', fn() => view('pages.activities.electrical-components'));
});

Route::get('/about-us', fn() => view('pages.about-us'));

Route::get('/contacts', fn() => view('pages.contacts'));
