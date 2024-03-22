<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craft</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
        @stack('header_js')
</head>
<body class=" items-center max-w-7xl  mx-auto">

   
   <x-main-menu-component/>

<div class="mt-4 ml-6">
   <x-babynew-component/>
   </div>
   <div class="mt-4 ml-6">
   <x-doctorcard-component/>
   </div>

   <div class="mt-4 ml-6">
   <x-cycle-component/>
   </div>

   <div class="mt-4 ml-3">
      <x-blogcard-component/>
   </div>
   <div class="mt-4 ml-3">
      <x-bluebutton-component/>
   </div>
   <div class="mt-4 ml-3">
      <x-pinkbutton-component/>
   </div>
   <div class="mt-4 ml-3">
      <x-viewallbutton-component/>
   </div>
   <div class="mt-4 ml-3">
      <x-bookappointment-component/>
   </div>

   <div class="mt-4 ml-3 mb-4">
      <x-review-component/>
   </div>
   
   

   
   
</div>

</body>
</html>