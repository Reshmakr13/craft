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
        <p class="text-xs lg:text-base lg:mt-2">Feel free to contact us any time. We will get back to you as soon as we can!</p>
        <div class="flex flex-col gap-4">
        
            <span class="mt-10 "><x-booking-stage-component/></span>
            <div class="flex justify-end lg:w-2/3">
                <a href="{{url('booking_stage_1')}}" class="flex rtl:flex-row-reverse justify-center right-0 items-center mt-5 md:mt-10 lg:mt-10 rounded-full bg-blue w-16 text-white  p-2 ">
                    <x-easyadmin::display.icon icon="icons.arrow-left" height="h-3" width="w-3"/>
                    <p class="text-xs">Back</p>
                </a>
            </div>
            
            <p class="text-base">Enter Your Details </p>
            
            
            <div>
                <form method="POST" action="">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <div class="relative lg:w-2/3 ">
                                <label for="name">Name</label>
                                <input id="name" name="name" type="text" autocomplete="name"
                                    class="w-full  h-10 text-gray-900 placeholder-transparent    focus:outline-none  focus:border-0 
                                        border-gray"
                                    required>
                                </input>
                                
                        </div>
                        <div class="relative lg:w-2/3  ">
                                <label for="phone no.">Phone No.</label>
                                <input id="phone no." name="phone no." type="text" autocomplete="phone no."
                                    class="w-full  h-10 text-gray-900 placeholder-transparent    focus:outline-none  focus:border-0 
                                        border-gray"
                                    required>
                                </input>
                                
                        </div>
                    </div>
                </form>
            </div>
            <span class="mt-6 lg:mt-10"><x-booking-button-component :title="'PROCEED TO PAYMENT'"/></span>
        </div>
    </div>
    </div>
    
</body>
</html>