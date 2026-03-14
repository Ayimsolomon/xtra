<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; color: #333; }
        .card { border: 1px solid #eee; padding: 20px; border-radius: 10px; width: 400px; }
        .car-img { width: 100%; border-radius: 5px; }
        .details { margin-top: 15px; border-top: 1px solid #eee; padding-top: 10px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Booking Confirmed!</h2>
        <p>Thank you for booking with us. Here are your trip details:</p>

        <img src="{{ $message->embed(public_path('storage/' . $booking->car->image)) }}" class="car-img">
        <h3>{{ $booking->car->name }}</h3>
        <p><strong>Color:</strong> {{ $booking->car->color }}</p>

        <div class="details">
            <p><strong>From:</strong> {{ $booking->departure_location }}</p>
            <p><strong>To:</strong> {{ $booking->destination }}</p>
            <p><strong>Departure Time:</strong> {{ $booking->departure_time }}</p>
            <p><strong>Passengers:</strong> {{ $booking->passengers }}</p>
        </div>

        <p style="font-size: 12px; color: #777;">Safe travels!</p>
    </div>
</body>
</html>
