<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $library = [
        "username" => "Federica",
        "available_books" => [
            "P. Auster - Trilogia di New York",
            "A. Huxley - Il Mondo Nuovo",
            "M. Atwood - Il racconto dell'ancella",
            "I. Allende - Eva Luna"
        ],
        "not_available_books" => []
    ];
    return view('homepage', $library);
});
