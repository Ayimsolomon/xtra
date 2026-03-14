<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OppoController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\BookingController;
use Laravel\Socialite\Facades\Socialite;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;


Route::middleware('guest')->group(function () {
    Route::get('/sign-in', Login::class)->name('login');
    Route::get('/sign-up', Register::class)->name('register');
});

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard'); // Create this view as your landing page
})->name('dashboard');

Route::get('/cars', [BookingController::class, 'index'])->name('cars.index');

// Show the booking form for a specific car
Route::get('/book/{car}', [BookingController::class, 'create'])->name('bookings.create');

// Save the booking and send mail
Route::post('/book', [BookingController::class, 'store'])->name('bookings.store');
// 1. The actual login page (where the "Login with Google" button lives)
Route::get('/login', function () {
    return view('login'); // Make sure resources/views/login.blade.php exists
})->name('login');

// 2. Socialite Routes
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callback']);

// 3. Protected Dashboard
Route::get('/dashboard', function () {
    return view('dashboard', ['user' => Auth::user()]);
})->middleware(['auth'])->name('dashboard');


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/sign-in');
})->name('logout');

Route::controller(FormController::class)->group(function () {
    Route::get('/data', 'showForm');
    Route::get('/users', 'showData');
    Route::post('/form', 'submitForm');
    // Route::delete('/delete/{id}','deleteContact');
});

Route::delete('/form/{id}', [FormController::class, 'deleteContact'])->name('contacts.delete');
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/apps', function () {
    return view('oppo');
});
Route::get('/store', [OppoController::class,'store']);

Route::livewire('/post/create', 'pages::post.create');
