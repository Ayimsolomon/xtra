<?php
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Booking;
use App\Mail\BookingConfirmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    // Show all available cars
    public function index() {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    // Show booking form for a specific car
   // Add the '$' before car and ensure 'Car' is the type-hint
public function create(Car $car) 
{
    return view('bookings.create', compact('car'));
}

    // Process the booking
    public function store(Request $request) {
        $data = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'user_email' => 'required|email',
            'departure_location' => 'required',
            'destination' => 'required',
            'departure_time' => 'required|date|after:now',
            'passengers' => 'required|integer|min:1',
        ]);

        $booking = Booking::create($data);

        // Send the email
        Mail::to($data['user_email'])->send(new BookingConfirmed($booking));

        return back()->with('success', 'Booking successful! Check your email.');
    }
}