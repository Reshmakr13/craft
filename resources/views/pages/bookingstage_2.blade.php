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
        
        <div class="flex flex-col gap-4">
            <span class="mt-10 "><x-booking-stage-component/></span>

            <div class="flex justify-end ">
                <a href="{{url('booking_stage_1')}}"class="flex rtl:flex-row-reverse justify-center right-0 items-center mt-5 md:mt-10 lg:mt-10 rounded-full bg-blue w-16 text-white  p-2 ">
                    <x-easyadmin::display.icon icon="icons.arrow-left" height="h-3" width="w-3"/>
                    <p class="text-xs">Back</p>
                </a>
            </div>

            <p class="text-base">Select Preffered Date </p>
            <div class="grid grid-cols-3 sm:grid-cols-5 lg:grid-cols-10 gap-y-6 lg:gap-x-4 xl:justify-between">
            <x-booking-date-component/>
            <x-booking-date-component :month="'Mar'" :date="'29'" :day="'Friday'"/>
            <x-booking-date-component :month="'Mar'" :date="'30'" :day="'Saturday'"/>
            <x-booking-date-component :month="'Mar'" :date="'31'" :day="'Sunday'"/>
            <x-booking-date-component :month="'Apr'" :date="'1'" :day="'Monday'"/>
            <x-booking-date-component :month="'Apr'" :date="'2'" :day="'Tuesday'"/>
            <x-booking-date-component :month="'Apr'" :date="'2'" :day="'Wednesday'"/>
            <x-booking-date-component :month="'Apr'" :date="'4'" :day="'Thursday'"/>
            <x-booking-date-component :month="'Apr'" :date="'5'" :day="'Friday'"/>
            <x-booking-date-component :month="'Apr'" :date="'6'" :day="'Saturday'"/>
            </div>
            
            <p class="text-base">Select Preffered Time </p>
            <div class="grid grid-cols-3 sm:grid-cols-5 lg:grid-cols-8 gap-y-6 lg:gap-x-4 xl:justify-between">
                <x-booking-time-component/>
                <x-booking-time-component :time="'9:15 AM'"/>
                <x-booking-time-component :time="'9:30 AM'"/>
                <x-booking-time-component :time="'9:45 AM'"/>
                <x-booking-time-component :time="'10:00 AM'"/>
                <x-booking-time-component :time="'10:15 AM'"/>
                <x-booking-time-component :time="'10:30 AM'"/>
                <x-booking-time-component :time="'10:45 AM'"/>
                <x-booking-time-component :time="'11:00 AM'"/>
                <x-booking-time-component :time="'11:15 AM'"/>
                <x-booking-time-component :time="'11:30AM'"/>
                <x-booking-time-component :time="'11:45 AM'"/>
                <x-booking-time-component :time="'12:00 PM'"/>
                <x-booking-time-component :time="'12:15 PM'"/>
                <x-booking-time-component :time="'12:30 PM'"/>
                <x-booking-time-component :time="'12:45 PM'"/>
                <x-booking-time-component :time="'1:00 PM'"/>
                <x-booking-time-component :time="'1:15 PM'"/>
                <x-booking-time-component :time="'1:30 PM'"/>
                <x-booking-time-component :time="'1:45 PM'"/>
                <x-booking-time-component :time="'2:00 PM'"/>
                <x-booking-time-component :time="'2:15 PM'"/>
                <x-booking-time-component :time="'2:30 PM'"/>
                <x-booking-time-component :time="'2:45 PM'"/>
                <x-booking-time-component :time="'3:00 PM'"/>
                <x-booking-time-component :time="'3:15 PM'"/>
                <x-booking-time-component :time="'3:30 PM'"/>
                <x-booking-time-component :time="'3:45 PM'"/>
                <x-booking-time-component :time="'4:00 PM'"/>
                <x-booking-time-component :time="'4:15 PM'"/>
                <x-booking-time-component :time="'4:30 PM'"/>
                <x-booking-time-component :time="'4:45 PM'"/>
            </div>
            <span class="mt-10"><x-booking-button-component/></span>
        </div>   
    </div>
    </div>
    
</body>
</html>