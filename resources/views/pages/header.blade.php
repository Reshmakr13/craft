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
<body  class="bg-white items-center max-w-7xl  mx-auto ">
<div>
    <div class="z-0 relative">
        <div class="absolute hidden lg:block bg-gray top-0 ltr:right-24 rtl:left-0 w-1/4  h-24"    ></div>
        <div class="absolute hidden lg:block bg-gray top-0 ltr:right-0 rtl:left-0 w-24 h-full"   ></div>
        <div class="absolute hidden lg:block bg-gray bottom-0 ltr:right-24 rtl:left-0 w-64 h-24" ></div>
        <div class="absolute lg:hidden bg-gray top-0  ltr:right-0 rtl:left-0 w-2/3 h-1/2 sm:h-3/5 md:h-3/5 z-0" ></div>

        <x-main-menu-component/>
        
    
    </div>
    <div>
        <div class="lg:flex  ">
            <div class=" lg:w-1/2 hidden lg:block lg:mt-24 lg:text-4xl xl:text-5xl  ltr:ml-16 rtl:mr-16  font-franklin">
                <p class="text-darkgray">The <span class="text-pink">Most Trusted</span> Hospital</p>
                <p  class="text-darkgray">For <span class="text-blue">Infertility Treatment</span></p>
                <div class="lg:flex lg:mt-12 lg:space-x-1">
                    <x-bluebutton-component/>
                    <x-pinkbutton-component/>
                </div>
                <p class="mt-8 font-bold md:text-base xl:text-lg 2xl:text-xl flex font-gothic">Feel Free To Call Us Any Time</p>
                <div class="flex  mt-2 flex-row items-center space-x-1">
                    <img src="/images/icons/Phone.png" class="h-3  2xl:h-5 "alt="">
                    <p class="text-black text-sm  md:text-base xl:text-lg 2xl:text-xl font-light">+91 8590462565</p>
                </div>
                <p class="text-sm text-darkpink  md:text-base font-normal xl:text-lg  mt-2 md:mt-4">Kochi | Kodungallur</p>
            </div>
            <div class="lg:w-1/2 mt-10 ">
                <div class="flex justify-center">
                    <img src="/images/home/baby.jpg" class=" mx-auto lg:w-2/3  w-2/3 sm:w-4/5 md:w-3/4 mt-4 sm:mt-6 xl:mt-6 md:mt-16 lg:mt-6   shadow-[10px_10px_5px_2px_rgba(0,0,0,0.3)] relative z-10 "alt="baby_image">
                </div>
                <div class="flex justify-center">
                    <div class="flex flex-col justify-centerlg:hidden absolute  bg-lightgray/80 z-20  text-center font-franklin w-4/5 sm:w-11/12 md:w-11/12  text-2xl md:text-3xl py-6 md:py-12 md:-mt-16  -mt-12 shadow-[0px_10px_12px_-4px_rgba(0,0,0,0.3)]">
                        <p  class="text-darkgray">The <span class="text-pink">Most Trusted</span> Hospital</p>
                        <p  class="text-darkgray">For <span class="text-blue">Infertility Treatment</span></p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="lg:hidden mt-24 sm:mt-28 sm:pt-0 relative ">
            <div class="flex justify-center ltr:space-x-2 rtl:space-x-2 rtl:space-x-reverse md:mt-36">
                <x-bluebutton-component/>
                <x-pinkbutton-component/>
            </div>
            <div class="">
                <p class="mt-8 font-bold md:text-base text-center  font-gothic">Feel Free To Call Us Any Time</p>
                <div class="flex justify-center  mt-2 flex-row items-center space-x-1">
                    <img src="/images/icons/Phone.png" class="h-3  2xl:h-5 "alt="">
                    <p class="text-black text-sm  md:text-base xl:text-lg 2xl:text-xl font-light">+91 8590462565</p>
                </div>
                <p class="text-sm text-darkpink text-center md:text-base font-normal xl:text-lg  mt-2 md:mt-4">Kochi | Kodungallur</p>
            </div>
            
            
        </div>
        <div class="mt-10">
            <p class="  lg:block text-sm italic text-pink  md:text-base xl:text-lg 2xl:text-xl font-normal text-center "><span class="font-bold">55,000 </span> little angles & counting...</p>
            <div class="flex justify-center space-x-4  sm:space-x-6    md:space-x-8  lg:space-x-10  rtl:space-x-reverse z-20 relative mt-6 pb-12">
            <x-babynew-component :count="14000" :text="'IVF-ICFSI'"/>
            <x-babynew-component :count="3800" :text="'MTESE-TESA ICSI'"/>
            <x-babynew-component :count="500" :text="'PGS/PGD'"/>
            </div>
        </div>
        
    </div>
</div>
<div>
    <p class="text-darkgray font-franklin text-center text-base md:text-lg lg:text-2xl xl:text-2xl -mt-4 md:mt-2 lg:mt-6">What our Patients Are Saying</p>
    <div class="flex ltr:flex-row  rtl:flex-reverse  ltr:ml-8 rtl:mr-8  mt-4 ltr:space-x-1 rtl:space-x-1 rtl:space-x-reverse">
        <img src="/images/icons/google icon.webp" class="h-6 lg:h-8 xl:h-10 rounded-full border border-gray ltr:md:ml-4 rtl:md:mr-4 ltr:lg:ml-10 rtl:lg:mr-10 ltr:xl:ml-16 rtl:xl:mr-16 " alt="">
        <p class="text-darkgray font-franklin ltr:text-left rtl:text-right  text-base lg:text-lg xl:text-xl xl:p-2">Reviews</p>
    </div>
</div>

<div class="mt-8 flex justify-center md:hidden">
    <x-review-component/>
</div>

<div class="mt-8 justify-center hidden md:flex space-x-4 lg:space-x-4 xl:space-x-14 rtl:space-x-reverse">
    <div><x-review-component/></div>
    <div><x-review-component/></div>
    <div class="hidden lg:block"><x-review-component/></div>
</div>

<div class="mt-6 flex ltr:justify-end rtl:justify-end ltr:md:justify-center rtl:md:justify-center ltr:mr-10  rtl:ml-10 ltr:sm:mr-40 rtl:sm:ml-40 ltr:md:mr-0 rtl:md:ml-0 ">
    <x-viewallbutton-component/>
</div>

<div class="relative">
    <div class="absolute bg-gray w-2/3 "></div>
    <div>
    
    </div>
</div>





</body>
</html>