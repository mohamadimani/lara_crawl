<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use jcobhams\NewsApi\NewsApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



route::get('/', function () {


    $newsapi = new NewsApi("da89dedff760447f83ace753b7e0bd6d");


    $top_headlines = $newsapi->getTopHeadlines('money');



    dd($top_headlines);
});
