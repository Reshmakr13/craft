<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    @stack('header_js')
</head>
<body>
<div x-data="{ tab:0 }" class="flex flex-col gap-4">
<a href="" @click="tab = 0" class=" tracking-widest {{ Request::is('booking_stage_1') ? 'text-black underline underline-offset-4' : '' }}">Stage 1</a>
<div x-show="0">
    <span class="lg:mt-10"><x-booking-form/></span>
    <span class="lg:mt-10"><x-booking-button-component /></span>
</div>
</div> 
<x-progress-bar />  
</body>
</html>