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

Route::get('my_tickets', [TicketController::class, 'show']);
Route::put('insert', [TicketController::class, 'store']);
Route::get('show_ticket/{id}', [TicketController::class, 'showTicket']);
Route::get('/', function () {
    return view('app');
});
//showTicket

Route::get('new_ticket', function () {
    return view('new_ticket');
});

Route::get('show_ticket', function () {
    return view('show_ticket');
});
