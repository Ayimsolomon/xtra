<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwiftBus | Book Your Journey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .page { display: none; }
        .page.active { display: block; }
        .seat { width: 40px; height: 40px; margin: 5px; cursor: pointer; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 12px; }
        .seat.available { background-color: #e2e8f0; border: 1px solid #cbd5e1; }
        .seat.selected { background-color: #3b82f6; color: white; }
        .seat.occupied { background-color: #94a3b8; cursor: not-allowed; opacity: 0.5; }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-blue-600 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold italic tracking-tighter">Swift Lane</h1>
            <span id="step-indicator" class="text-sm bg-blue-700 px-3 py-1 rounded-full">Step 1: Search</span>
        </div>
    </nav>

    <main class="container mx-auto mt-8 p-4 max-w-2xl">

        <section id="page-search" class="page active bg-white p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-bold mb-4">Where are you headed?</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-600">From</label>
                    <input type="text" id="from" placeholder="City of Departure" class="w-full p-2 border rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600">To</label>
                    <input type="text" id="to" placeholder="Destination City" class="w-full p-2 border rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600">Travel Date</label>
                    <input type="date" id="date" class="w-full p-2 border rounded-md">
                </div>
                <button onclick="navigateTo('page-seats')" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Find Buses
                </button>
            </div>
        </section>

        <section id="page-seats" class="page bg-white p-6 rounded-xl shadow-md">
            <button onclick="navigateTo('page-search')" class="text-blue-600 mb-4 text-sm font-medium">← Back to Search</button>
            <h2 class="text-xl font-bold mb-2">Select Seats</h2>
            <p class="text-slate-500 text-sm mb-6">Route: <span id="route-display" class="font-bold text-slate-700"></span></p>

            <div class="grid grid-cols-4 gap-2 justify-items-center mb-8 border-t border-b py-6">
                <div id="seat-map" class="contents"></div>
            </div>

            <div class="flex justify-between items-center mb-6">
                <div>
                    <p class="text-sm text-slate-500">Selected: <span id="selected-count" class="font-bold text-blue-600">0</span></p>
                    <p class="text-lg font-bold">Total: N<span id="total-price">0</span></p>
                </div>
                <button onclick="navigateTo('page-confirm')" id="confirm-seats-btn" disabled class="bg-blue-600 text-white px-6 py-2 rounded-lg opacity-50 cursor-not-allowed">
                    Continue
                </button>
            </div>
        </section>

        <section id="page-confirm" class="page bg-white p-8 rounded-xl shadow-md text-center">
            <div class="mb-4 text-green-500">
                <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h2 class="text-2xl font-bold mb-2">Booking Confirmed!</h2>
            <p class="text-slate-600 mb-6">Your ticket has been sent to your email.</p>
            <div class="bg-slate-50 p-4 rounded-lg text-left mb-6">
                <p><strong>Tickets:</strong> <span id="final-seats"></span></p>
                <p><strong>Total Paid:</strong> N<span id="final-price"></span></p>
            </div>
            <button onclick="location.reload()" class="text-blue-600 font-semibold underline">Book another trip</button>
        </section>

    </main>

    <script>
        let selectedSeats = [];
        const SEAT_PRICE = 25;

        function navigateTo(pageId) {
            // Update UI visibility
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            document.getElementById(pageId).classList.add('active');

            // Handle Logic per page
            if (pageId === 'page-seats') {
                const from = document.getElementById('from').value || "Start";
                const to = document.getElementById('to').value || "End";
                document.getElementById('route-display').innerText = `${from} to ${to}`;
                document.getElementById('step-indicator').innerText = "Step 2: Seats";
                renderSeats();
            }

            if (pageId === 'page-confirm') {
                document.getElementById('step-indicator').innerText = "Step 3: Done";
                document.getElementById('final-seats').innerText = selectedSeats.join(', ');
                document.getElementById('final-price').innerText = selectedSeats.length * SEAT_PRICE;
            }
        }

        function renderSeats() {
            const container = document.getElementById('seat-map');
            container.innerHTML = '';
            // Create 20 seats
            for (let i = 1; i <= 20; i++) {
                const seat = document.createElement('div');
                const isOccupied = [3, 7, 12].includes(i);
                seat.className = `seat ${isOccupied ? 'occupied' : 'available'}`;
                seat.innerText = i;

                if (!isOccupied) {
                    seat.onclick = () => toggleSeat(i, seat);
                }
                container.appendChild(seat);
            }
        }

        function toggleSeat(num, el) {
            if (selectedSeats.includes(num)) {
                selectedSeats = selectedSeats.filter(s => s !== num);
                el.classList.remove('selected');
                el.classList.add('available');
            } else {
                selectedSeats.push(num);
                el.classList.add('selected');
                el.classList.remove('available');
            }
            updateSummary();
        }

        function updateSummary() {
            const count = selectedSeats.length;
            document.getElementById('selected-count').innerText = count;
            document.getElementById('total-price').innerText = count * SEAT_PRICE;

            const btn = document.getElementById('confirm-seats-btn');
            if (count > 0) {
                btn.disabled = false;
                btn.classList.remove('opacity-50', 'cursor-not-allowed');
            } else {
                btn.disabled = true;
                btn.classList.add('opacity-50', 'cursor-not-allowed');
            }
        }
    </script>
</body>
</html>
