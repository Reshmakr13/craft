<!DOCTYPE html>
<html dir=ltr lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
        @stack('header_js')
</head>
<body  class="bg-white items-center max-w-7xl  mx-auto ">
    
</body>
</html>
<div class="max-w-sm sm:max-w-lg md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto mt-10">
    <x-doctorinfo-card/>
</div>