<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\YachtController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::get('/yacht/{id}', [YachtController::class, 'show'])->name('yachts.show');
Route::get('/car/{id}', [CarController::class, 'show'])->name('cars.show');
Route::get('/ticket/{id}', [TicketController::class, 'show'])->name('tickets.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Routes for managing cars
    Route::get('/dashboard/car', [CarController::class, 'index'])->name('car');          // Display the list of cars
    Route::post('/dashboard/car', [CarController::class, 'store'])->name('car.store');  // Store a new car
    Route::get('/dashboard/car/create', [CarController::class, 'create'])->name('car.create'); // Form to create a new car
    Route::get('/dashboard/car/{car}/edit', [CarController::class, 'edit'])->name('car.edit');    // Form to edit a car
    Route::put('/dashboard/car/{car}', [CarController::class, 'update'])->name('car.update');    // Update a car
    Route::delete('/dashboard/car/{car}', [CarController::class, 'destroy'])->name('car.destroy'); // Delete a car

    // Routes for managing yachts
    Route::get('/dashboard/yacht', [YachtController::class, 'index'])->name('yacht');         // Display the list of yachts
    Route::post('/dashboard/yacht', [YachtController::class, 'store'])->name('yacht.store');  // Store a new yacht
    Route::get('/dashboard/yacht/create', [YachtController::class, 'create'])->name('yacht.create'); // Form to create a new yacht
    Route::get('/dashboard/yacht/{yacht}/edit', [YachtController::class, 'edit'])->name('yacht.edit');    // Form to edit a yacht
    Route::put('/dashboard/yacht/{yacht}', [YachtController::class, 'update'])->name('yacht.update');    // Update a yacht
    Route::delete('/dashboard/yacht/{yacht}', [YachtController::class, 'destroy'])->name('yacht.destroy'); // Delete a yacht

    // Routes for managing tickets
    Route::get('/dashboard/ticket', [TicketController::class, 'index'])->name('ticket');         // Display the list of tickets
    Route::post('/dashboard/ticket', [TicketController::class, 'store'])->name('ticket.store');  // Store a new ticket
    Route::get('/dashboard/ticket/create', [TicketController::class, 'create'])->name('ticket.create'); // Form to create a new ticket
    Route::get('/dashboard/ticket/{ticket}/edit', [TicketController::class, 'edit'])->name('ticket.edit');    // Form to edit a ticket
    Route::put('/dashboard/ticket/{ticket}', [TicketController::class, 'update'])->name('ticket.update');    // Update a ticket
    Route::delete('/dashboard/ticket/{ticket}', [TicketController::class, 'destroy'])->name('ticket.destroy'); // Delete a ticket
});

Route::get('/cars', [CarController::class, 'showClientCar'])->name('client.cars');
Route::get('/yachts', [YachtController::class, 'showClientYacht'])->name('client.cars');
Route::get('/tickets', [TicketController::class, 'showClientTicket'])->name('client.tickets');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
