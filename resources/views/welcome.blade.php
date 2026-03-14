<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Xtrahands Lane - Your trusted ride-sharing service">
    <meta name="keywords" content="Xtrahands Lane, ride-sharing, transportation, booking, safe travel">
    <meta name="author" content="Ayim Solomon">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./images/xhlogo.png" type="image/png" sizes="1920x1920">
    <title>Xtrahands Lane - Ride Sharing Service</title>
</head>
<body>
    <div class="fixed flex flex-row items-center justify-between w-full bg-white px-4 top-0 left-0 z-50">
        <div class="flex flex-row items-center justify-center gap-4 ml-2">
            <img src="./images/xhlogo.png" alt="" srcset="" class="w-20 h-30">
        </div>

         <div class="flex flex-row items-center justify-center gap-4 mr-4" onclick="menu.hidden^=1">
            <button class="bg-sky-900 text-white py-2 px-4 rounded-lg hover:bg-green cursor-pointer">=</button>
         </div>
        </div>
    <div id="menu" class=" fixed right-0 top-16 flex flex-col gap-2 shadow-lg p-4 bg-sky-900 h-screen px-6 py-6 w-50 z-40">
            <a href="#home" class="text-white font-bold hover:text-red-400 transition-colors">Home</a>
            <a href="#about" class="text-white font-bold hover:text-red-400 transition-colors">About</a>
            <a href="#route" class="text-white font-bold hover:text-red-400 transition-colors">Route</a>
            <a href="#booking" class="text-white font-bold hover:text-red-400 transition-colors">Booking</a>
    </div>
    <div class="w-full mt-16 scroll-mt-20" id="home" >
        <img src="./images/bg-image.png" alt="" class="w-full lg:h-120">

    </div>

      <div class="bg-white shadow-lg w-full text-center py-6">
        <h2 class="uppercase font-bold">
            Book Your Ride with Ease
        </h2>
        <p class="">Swift booking system, drive safe, and travel at ease to your chosen destination</p>
      </div>

      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 bg-white w-full mt-4">

     <div class=" py-8 text-center mx-4 my-4 rounded-2xl shadow-lg bg-white border-solid border-4 border-red-700">
        <img src="./images/mercedes c230.png" alt="" srcset="" class="w-full h-auto mt-8 hover:scale-105 transition-transform">
     </div>
      <div class="py-6 text-center mx-4 my-4 rounded-2xl shadow-lg flex flex-col items-center justify-center border-solid border-4 border-sky-900">
        <p class="p-4 text-dark-700">
            From effortless online booking to premium comfort on the road, Xtrahand Lane and Logistics is redefining travel in Gombe.
        </p>
      </div>
        <div class="py-6 text-center mx-4 my-4 rounded-2xl shadow-lg bg-white flex flex-col items-center justify-center border-solid border-4 border-sky-900" >
            <p class="p-4 text-dark-700">
                No more delays or compromises. We’re in Gombe to solve transportation problems, one polite driver at a time.
            </p>
          </div>
     <div class="bg-white py-8 text-center mx-4 my-4 rounded-2xl shadow-lg border-solid border-4 border-red-700">
        <img src="./images/camry.png" alt="" srcset="" class="w-full h-auto mt-8 hover:scale-105 transition-transform">
     </div>
      </div>

    <div class="bg-white py-3 rounded-3xl shadow-lg mx-2 my-4">
        <h2 class="rounded-lg font-bold text-xl text-center bg-sky-900 w-full text-white p-4">
            Sponsors
        </h2>
        <marquee direction="left" class="text-gray-700 font-bold text-lg">
            <div class="flex items-center justify-items-center py-4 gap-12">

                    <img src="./images/mercedeslogo.png" alt="Mercedes" class="w-16 h-16 sm:w-20 sm:h-20 object-contain">


                    <img src="./images/mastercard.png" alt="Mercedes" class="w-16 h-16 sm:w-20 sm:h-20 object-contain">


                    <img src="./images/toyotalogo.png" alt="Toyota" class="w-14 h-14 sm:w-20 sm:h-20 object-contain">


                    <img src="./images/gmline.png" alt="GM" class="w-14 h-14 sm:w-20 sm:h-20 object-contain">

                    <img src="./images/gosideclogo.png" alt="GoSidec" class="w-16 h-16 sm:w-20 sm:h-20 object-contain">

            </div>
        </marquee>
    </div>
<!-- This is the about section -->
 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-2 w-full mt-4 scroll-mt-20" id="about">

          <div class="py-6 mx-4 my-4 rounded-2xl shadow-lg bg-white">
            <h2 class="rounded-lg font-bold text-xl text-center bg-sky-900 w-full text-white p-4">About Us</h2>
            <p class="p-4 text-dark-700 font-serif text-sm">
                Established in 2023 in Gombe State, Nigeria, Xtrahand Lane and Logistics was born out of a simple necessity: the need for a transportation system that actually respects the traveler.

For too long, commuters have dealt with the "standard" headaches of travel—long booking delays, unprofessional drivers, skyrocketing costs, and cramped, uncomfortable vehicles. We decided that "standard" wasn't good enough.

At Xtrahand, we bridge the gap between technology and transit. Our mission is to provide a seamless, dignified, and affordable travel experience. Whether you are crossing state lines or just heading across town, we ensure that your journey begins the moment you decide to move—not just when you get into the car.

Why Choose Us?

Ease of Access: Book your seat from your living room; no more standing in queues.

Professionalism: Our drivers aren't just operators; they are trained professionals committed to your safety and courtesy.

Value-Driven: We offer premium service delivery without the premium price tag.

Comfort First: We prioritize modern, well-maintained vehicles to ensure you arrive refreshed.
            </p>
        </div>
        <div class="py-6 mx-4 my-4 rounded-2xl shadow-lg bg-white">
            <h2 class="rounded-lg font-bold text-xl text-center bg-sky-900 w-full text-white p-4">Our Services</h2>
         <p class="p-4 text-dark-700 font-serif text-sm">
             We’ve designed our service suite to cover every mile of your journey, ensuring reliability at every turn. <br> <br>

1. Inter-City Travel Booking
Skip the park delays. Use our digital platform to schedule and pay for long-distance travels. We offer scheduled departures that respect your time, providing a smooth transition from Gombe to various destinations across Nigeria.
 <br>
2. City Ride (Shuttle)
Need to get around town? Our Xtrahand Shuttle service offers a safe, polite, and efficient way to navigate the city. Perfect for errands, business meetings, or daily commutes where comfort is a priority.
 <br>
3. Corporate Logistics & Charter
We provide tailored transportation solutions for organizations and private groups. From staff busing to private car charters, we handle the logistics so you can focus on your destination.
 <br>
4. Express Courier Services
Leveraging our existing routes, we offer fast and secure delivery for your parcels and documents. We treat your packages with the same care and "extra hand" we give our passengers.
         </p>
     </div>

 </div>
<!-- Routes section showcasing the different routes available for booking -->

          <div class=" w-full py-6 px-4 text-center my-2 mx-2 shadow-lg bg-white scroll-mt-20" id="route">
            <h2 class="w-full rounded-lg font-bold text-xl text-center bg-sky-900 text-white p-4">Available Booking Route</h2>
            <div class="overflow-x-auto overflow-hidden">
                 <table class="min-w-full overflow-hidden divide-y divide-gray-200 text-sm md:text-base mt-4">
                <thead>
                    <tr class="bg-red-700 text-white font-serif ">
                        <th class="px-8">Group</th>
                        <th class="px-8 p-2">Routes</th>
                        <th class="px-8 p-2">Route Pair</th>
                        <th class="px-8 p-2">Distance (km)</th>
                        <th class="px-8 p-2">Pricing</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="p-2">A</td>
                        <td class="p-2">Abuja</td>
                        <td class="p-2">A - B</td>
                        <td class="p-2">45</td>
                        <td class="p-2">₦25</td>
                    </tr>
                    <tr class="bg-cyan-50">
                         <td class="p-2">B</td>
                        <td class="p-2">Bauchi</td>
                        <td class="p-2">A - B</td>
                        <td class="p-2">45</td>
                        <td class="p-2">₦25</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-2">D</td>
                        <td class="p-2">Gombe</td>
                        <td class="p-2">E - F</td>
                        <td class="p-2">30</td>
                        <td class="p-2">₦18</td>
                    </tr>
                    <tr class="bg-cyan-50">
                        <td class="p-2">C</td>
                        <td class="p-2">Jos</td>
                        <td class="p-2">C - D</td>
                        <td class="p-2">60</td>
                        <td class="p-2">₦35</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-2">C</td>
                        <td class="p-2">Maiduguri</td>
                        <td class="p-2">C - D</td>
                        <td class="p-2">60</td>
                        <td class="p-2">₦35</td>
                    </tr>
                    <tr class="bg-cyan-50">
                         <td class="p-2">E</td>
                        <td class="p-2">Kaduna</td>
                        <td class="p-2">E - F</td>
                        <td class="p-2">30</td>
                        <td class="p-2">₦18</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-2">F</td>
                        <td class="p-2">Kano</td>
                        <td class="p-2">E - F</td>
                        <td class="p-2">30</td>
                        <td class="p-2">₦18</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

<!-- Total routes, users, customers count section -->
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 bg-white shadow-lg w-full mt-4">
            <div class="py-6 text-center mx-4 my-4 rounded-2xl hover:scale-105 transition-transform shadow-lg bg-white">
                <h2 class="font-bold text-xl">Total Routes</h2>
                <p class="text-dark-700 font-serif text-lg">10</p>
            </div>
            <div class="py-6 text-center mx-4 my-4 rounded-2xl hover:scale-105 transition-transform shadow-lg bg-white">
                <h2 class="font-bold text-xl">Total Users</h2>
                <p class="text-dark-700 font-serif text-lg">500</p>
            </div>
            <div class="py-6 text-center mx-4 my-4 rounded-2xl hover:scale-105 transition-transform shadow-lg bg-white">
                <h2 class="font-bold text-xl">Total Customers</h2>
                <p class="text-dark-700 font-serif text-lg">2000</p>
            </div>
        </div>

        <!-- this is the testimonies section -->
         <div class="mb-8 py-8 px-6 shadow-lg bg-white mt-4">
             <h2 class="rounded-lg font-bold text-xl text-center bg-sky-900 w-full text-white p-4">Testimonies</h2>
         <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <div class="my-4 mx-2 p-2 grid grid-cols-2 shadow rounded-lg flex flex-col items-center justify-center"> <img src="./images/v1.jpeg" alt="" srcset="" class="border-3 border-cyan-900 object-cover rounded-full">
                <div class="center">
                    <span class="font-serif font-bold bg-red-700 p-2 text-sm text-white rounded-lg shadow-lg">Taylar Mile</span> <p class="center font-serif max-w-lg mx-4 py-2 text-sm"> Xtrahands lane is the best I've traveled with.</p>
                </div>
            </div>

            <div class="my-4 mx-2 p-2 grid grid-cols-2 shadow rounded-lg flex flex-col items-center justify-center"> <img src="./images/v2.jpeg" alt="" srcset="" class="border-3 border-cyan-900 object-cover rounded-full">
                <div class="center">
                    <span class="font-serif font-bold bg-red-700 p-2 text-sm text-white rounded-lg shadow-lg">Musa Idris</span> <p class="center font-serif mx-4 py-2 text-sm"> Xtrahands lane services is swift and safe.</p>
                </div>
            </div>

            <div class="my-4 mx-2 p-2 grid grid-cols-2 shadow rounded-lg flex flex-col items-center justify-center"> <img src="./images/v4.jpg" alt="" srcset="" class="border-3 border-cyan-900 object-cover rounded-full">
                <div class="center">
                   <span class="font-serif font-bold bg-red-700 p-2 text-sm text-white rounded-lg shadow-lg">Murjanatu Mohd</span><p class="center font-serif mx-4 py-2 text-sm"> Xtrahands lane very friendly and polite drivers and customer services.</p>
                </div>
            </div>

            <div class="my-4 mx-2 p-2 grid grid-cols-2 shadow rounded-lg flex flex-col items-center justify-center"> <img src="./images/v5.jpeg" alt="" srcset="" class="border-3 border-cyan-900 object-cover rounded-full">
                <div class="center">
                    <span class="font-serif font-bold bg-red-700 p-2 text-sm text-white rounded-lg shadow-lg">Pricilla Mark</span> <p class="center font-serif mx-4 py-2 text-sm"> Xtrahands lane is the best I've traveled with, there services is swift and safe.</p>
                </div>
            </div>

         </div>
            </div>

         <div class="flex flex-col items-center justify-center bg-white shadow-lg w-full py-8 rounded-2xl py-4 px-6 mb-8 mt-6">
            <h2 class="center">Suggestion Box</h2>
            <form action="" class="flex flex-col items-center justify-center w-100 max-w-md mt-4">
                <input type="text" placeholder="Your Name" class="border border-gray-300 rounded-lg py-2 px-4 mb-4 w-full">
                <input type="email" placeholder="Your Email" class="border border-gray-300 rounded-lg py-2 px-4 mb-4 w-full">
                <textarea placeholder="Your Suggestion" class="border border-gray-300 rounded-lg py-2 px-4 mb-4 w-full"></textarea>
                <button type="submit" class="bg-green-600 text-white py-3 px-6 rounded-lg hover:bg-green-800 cursor-pointer">Submit</button>
         </div>

         <div class="bg-sky-900 shadow-lg w-full py-4 border-solid border-4 border-t-red-700">
            <p class="text-center text-white font-serif">© 2026 Xtrahands Lane. All rights reserved.</p> <br>
            <p class="text-center text-white font-serif"><a href="tel:+2349037286813">Developed by Ayim Solomon</a> </p>

         </div>
</body>
</html>
