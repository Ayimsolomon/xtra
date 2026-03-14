<!DOCTYPE html>
<html>
<head>
    <title>Book {{ $car->name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <div class="container">
    <h2>Complete Your Booking for {{ $car->name }}</h2>
    <div class="card mb-3">
        <img src="{{ asset('storage/' . $car->image) }}" style="width: 200px;">
        <p>Color: {{ $car->color }}</p>
    </div>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">

        <label>Your Email:</label>
        <input type="email" name="user_email" required class="form-control">

        <label>Departure Location:</label>
        <input type="text" name="departure_location" required class="form-control">

        <label>Destination:</label>
        <input type="text" name="destination" required class="form-control">

        <label>Departure Date & Time:</label>
        <input type="datetime-local" name="departure_time" required class="form-control">

        <label>Number of Passengers:</label>
        <input type="number" name="passengers" required class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Confirm Booking</button>
    </form>
</div>
</body>
</html>
