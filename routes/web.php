<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $produtos = Http::get('http://616d6bdb6dacbb001794ca17.mockapi.io/devnology/brazilian_provider');
    $produtosArray = $produtos->json();

    return view('produtos', ['produtosArray' => $produtosArray]);
});



