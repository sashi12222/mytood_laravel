<?php

use App\Http\Controllers\Mytodocontroller;
use App\Models\Mytodo;
use Illuminate\Support\Facades\Route;

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
   $mytodos=Mytodo::all();
    return view('index',compact('mytodos'));
});


Route::resource('/mytodo',Mytodocontroller::class);