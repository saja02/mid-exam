<?php

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

Route::get('create_expenses', [TicketController::class, 'create_expenses']);
Route::put('dashboard', [TicketController::class, 'dashboard']);
Route::get('expenses/{id}', [TicketController::class, 'expenses']);
Route::get('/', function () {
    return view('app');
});
//showTicket

Route::get('create_expenses', function () {
    return view('create_expenses');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('expenses', function () {
    return view('expenses');
});
