<!DOCTYPE html>
<html>
<head>
    <title>Available Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <h2 class="mb-4">Select a Car to Book</h2>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('storage/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="text-muted">Color: {{ $car->color }}</p>
                    <p class="fw-bold text-success">${{ $car->price_per_day }} / day</p>
                    <a href="{{ route('bookings.create', $car->id) }}" class="btn btn-primary w-100">Book This Car</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>