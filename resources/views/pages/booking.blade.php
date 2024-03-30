<!DOCTYPE html>
<html dir=ltr lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    @stack('header_js')
</head>
<body class="bg-white items-center max-w-7xl  mx-auto ">
    <div>
    <x-main-menu-component/>
    <div class="max-w-sm sm:max-w-lg md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto text-darkgray font-franklin text-sm mt-16 pb-8">
        <p class="text-xl lg:text-4xl">Book An Appointment</p>
        <p class="text-xs lg:text-base mt-2">Feel free to contact us any time. We will get back to you as soon as we can!</p>
        <div x-data="{ tab : 0  }" class="flex flex-col gap-4">
            
            <x-booking-stage-component/>

            
            <x-bookingstage1 />
            <x-bookingstage2 />
            <x-bookingstage3 />
            
            
        </div>
        </div>
    </div>
    </div>
    
</body>
</html>