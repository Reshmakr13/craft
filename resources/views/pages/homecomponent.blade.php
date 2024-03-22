<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>craft</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
        @stack('header_js')
</head>
<body class="flex justify-center items-center max-w-7xl mx-auto ">

   <div>
   <div class="relative flex flex-col w-full">
           <div class="flex flex-row  w-full absolute top-0  z-30 ">
                <img src="/images/icons/craftfertility (1).webp" class="h-16 md:h-20  lg:ml-12 rtl:lg:mr-12 flex  ltr:justify-start rtl:justify-end ml-8 rtl:mr-8 mt-2 shadow-xl"alt="craft_logo_image">
                <div class="flex  lg:flex-col rtl:lg:flex-col justify-end  w-full items-center  ">
                    <div class="bg-gray   absolute  ltr:right-0 rtl:left-0  top-0 w-2/3 md:w-1/3 h-full flex  ltr:justify-end rtl:justify-start "></div>
                    <!-- <div class="bg-gray ltl:hidden absolute  left-0  top-0 w-2/3 md:w-1/3 h-full flex justify-start"></div> -->
                        <svg  class=" w-5  z-10 md:h-6 md:w-6 mr-2 rtl:ml-2  md:mr-4 lg:hidden " viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M64.28704 864h416a64 64 0 0 1 4.8 127.84L480.28704 992H64.28704a64 64 0 0 1-4.8-127.84L64.28704 864h416H64.28704z m0-416h832a64 64 0 0 1 4.8 127.84L896.28704 576H64.28704a64 64 0 0 1-4.8-127.84L64.28704 448zM480.28704 48h416a64 64 0 0 1 4.8 127.84L896.28704 176H480.28704a64 64 0 0 1-4.8-127.84L480.28704 48z" fill="#404853" /></svg>
                        <div class="z-10 lg:flex lg:w-full hidden  relative">
                            <div class="flex ltr:flex-row rtl:flex-row-reverse items-center space-x-3 lg:p-3 ltr:justify-end rtl:justify-start">
                                    <div class="flex flex-row  items-center space-x-1 ">
                                        <img src="/images/icons/Phone.png" class="h-3  "alt="">
                                        <p class="text-black text-xs lg:text-sm  font-light font-questrial">+91 8590462565</p>
                                    </div>
                                    <div class="flex flex-row items-center space-x-1 ">
                                        <img src="/images/icons/medicine logo.png" class="h-3 "alt="">
                                        <p class=" text-xs text-black lg:text-sm  font-light font-questrial">International Patients</p>
                                    </div>
                            </div>
                            
                        </div>
                        <div class=" ltr:flex-row rtl:flex-row-reverse relative  items-center z-40 md:w-full lg:w-full  hidden lg:flex ">
                            <div class="flex   ltr:justify-end rtl:justify-end text-sm md:text-xs lg:mt-4 lg:text-sm lg:pb-3 ltr:lg:mr-4 rtl:lg:ml-4 xl:mr-6 rtl:xl:ml-4 xl:text-base  md:space-x-2 lg:space-x-5 xl:space-x-8   font-questrial ">
                                <a href="#">
                                    <div class="flex flex-row rtl:flex-row-reverse items-center  space-x-1">
                                        <div><p class="font-questrial">About us</p></div>
                                        <img src="/images/icons/drop-down arow solid.png" class=" md:h-2" alt="">
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="flex flex-row rtl:flex-row-reverse items-center space-x-1">
                                        <div><p>I’m Looking For</p></div>
                                        <img src="/images/icons/drop-down arow solid.png" class="h-2" alt="">
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="flex flex-row rtl:flex-row-reverse items-center space-x-1">
                                        <div><p>Patient Guide</p></div>
                                        <img src="/images/icons/drop-down arow solid.png" class="h-2" alt="">
                                    </div>
                                </a>
                                
                                <a href="#">
                                    <div class="flex flex-row rtl:flex-row-reverse items-center">
                                        <div><p>Training Courses</p></div>
                                        
                                    </div>
                                </a><a href="#">Contact Us</a>  
                                <a href="#">
                                    <div class="flex flex-row rtl:flex-row-reverse items-center">
                                        <div><p>E Book</p></div>
                                        
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="flex flex-row rtl:flex-row-reverse items-center ">
                                        <div><p>Blogs</p></div>
                                        
                                    </div>
                                </a>
                            </div>
                            

                       
                        </div>
                </div>
                    
                    
            </div>
               
                   
                
            
           
            <div class="lg:flex rtl:lg:flex-reverse ">
                <div class="lg:flex-col lg:w-1/2 hidden lg:block lg:mt-24 text-4xl xl:text-5xl  ltr:ml-16 rtl:mr-16  font-franklin">
                    <div>
                        <p class="text-darkgray">The <span class="text-pink">Most Trusted</span> Hospital</p>
                        <p  class="text-darkgray">For <span class="text-blue">Infertility Treatment</span></p>
                    </div>
                    <div class="mt-8">
                        <div class="flex space-x-2 ">
                                <a>
                                    <div class="flex  items-center space-x-2 rtl:space-x-reverse bg-blue border rounded-3xl text-white font-franklin shadow-[0px_10px_3px_-6px_rgba(0,0,0,0.3)] p-2 pl-4">
                                        <p class="text-center md:text-base xl:text-lg ">Book an appointment</p>
                                        <img src="/images/icons/booking icon.png" class="h-4 xl:h-5"alt="">
                                    </div>
                                </a>
                            
                                <a>
                                    <div class="flex  items-center space-x-2 rtl:space-x-reverse bg-pink border rounded-3xl text-white font-franklin shadow-[0px_10px_3px_-6px_rgba(0,0,0,0.3)]  p-2 pl-4">
                                        <p class="text-center md:text-base ltr:ml-4 rtl:mr-4 xl:text-lg ">Chat With Us</p>
                                        <img src="/images/icons/whatsapp icon.png" class="h-4 xl:h-5"alt="">
                                    </div>
                                </a>
                        </div>
                        <div class="flex  flex-col md:mt-4 ">
                            <p class="mt-4 font-bold md:text-base xl:text-lg  flex font-gothic">Feel Free To Call Us Any Time</p>
                            <div class="flex  mt-2 flex-row items-center space-x-1">
                                <img src="/images/icons/Phone.png" class="h-3  "alt="">
                                <p class="text-black text-sm  md:text-base xl:text-lg  font-light">+91 8590462565</p>
                            </div>
                            <p class="text-sm text-darkpink  md:text-base font-normal xl:text-lg  mt-2 md:mt-4">Kochi  |  Kodungallur</p>
                        </div>

                    </div>
                    
                </div>
                <div class="lg:flex-col lg:w-1/2">
                    <div class="p-2 md:py-2 relative ">
                        <div class="h-full bg-gray  w-2/3 md:w-1/3 lg:w-16 xl:w-20  ltr:right-0 rtl:left-0  absolute lg:mt-20 lg:pb-16 "></div>
                        <div class="lg:pb-36 "><img src="/images/home/baby.jpg" class="w-5/6 lg:w-5/6 z-10 relative mt-24 ltr:ml-8 rtl:mr-8 ltr:lg:ml-0 rtl:lg:mr-0  lg:mt-28  md:ml-16 flex justify-end rtl:justify-start shadow-[10px_10px_5px_2px_rgba(0,0,0,0.3)]  "alt="baby_image"></div>
                    </div>
                    <div class="lg:hidden relative w-11/12  ml-4 rtl:mr-4 md:ml-8 bg-lightgray opacity-80 -mt-16 h-full  z-20  text-center text-2xl md:text-3xl font-fgothic p-4 md:p-6 shadow-[0px_10px_12px_-4px_rgba(0,0,0,0.3)]  ">
                        <p  class="text-darkgray">The <span class="text-pink">Most Trusted</span> Hospital</p>
                        <p  class="text-darkgray">For <span class="text-blue">Infertility Treatment</span></p>
                        
                    </div>
                    <div class="mt-6 md:mt-10 lg:hidden">
                        <div class="flex justify-center space-x-2 rtl:space-x-reverse">
                            <a>
                                <div class="flex  items-center space-x-2 rtl:space-x-reverse bg-blue border rounded-3xl text-white font-franklin shadow-[0px_10px_3px_-6px_rgba(0,0,0,0.3)] p-2 pl-4">
                                    <p class="text-center md:text-base ">Book an appointment</p>
                                    <img src="/images/icons/booking icon.png" class="h-4"alt="">
                                </div>
                            </a>
                        
                            <a>
                                <div class="flex  items-center space-x-2 rtl:space-x-reverse bg-pink border rounded-3xl text-white font-franklin shadow-[0px_10px_3px_-6px_rgba(0,0,0,0.3)]  p-2 pl-4 rtl:pr-4">
                                    <p class="text-center md:text-base ltr:ml-4 rtl:mr-4">Chat With Us</p>
                                    <img src="/images/icons/whatsapp icon.png" class="h-4 "alt="">
                                </div>
                            </a>
                        </div>
                        <div class="flex  flex-col md:mt-4 ">
                            <p class="mt-4 font-bold md:text-base flex justify-center">Feel Free To Call Us Any Time</p>
                            <div class="flex justify-center mt-2 flex-row items-center space-x-1">
                                <img src="/images/icons/Phone.png" class="h-3  "alt="">
                                <p class="text-black text-sm  md:text-base 2xl:text-base font-light">+91 8590462565</p>
                            </div>
                            <p class="text-sm text-darkpink  md:text-base font-normal text-center mt-2 md:mt-4">Kochi  |  Kodungallur</p>
                            <p class="text-sm italic text-pink  md:text-base font-normal text-center mt-2"><span class="font-bold">55,000 </span> little angles & counting...</p>
                        </div>
                        
                    </div>
                </div>
               
                
            </div>
            <div class="lg:relative lg:-mt-36 2xl:-mt-44 mb-20">
                <div class=" mt-6 2xl:mt-10 ">
                    <p class=" hidden lg:block text-sm italic text-pink  md:text-base xl:text-lg 2xl:text-xl font-normal text-center "><span class="font-bold">55,000 </span> little angles & counting...</p>
                </div>
                <div class="flex flex-row ltr:space-x-4 rtl:space-x-4 rtl:space-x-reverse ltr:lg:space-x-16 rtl:lg:space-x-16 rtl:lg:space-x-reverse ltr:justify-center rtl:justify-center mb-2 mt-6 z-20 lg:relative">
                    <div class=" bg-white p-3 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] ">
                        <img src="/images/icons/baby icon.png" class="h-12 md:h-20 lg:h-24 xl:h-32 2xl:h-36 mx-auto px-3 " alt="">
                        <p class="text-center xl:text-lg  font-bold">14,000</p>
                        <p class="text-center xl:text-lg ">IVF-ICFSI</p>
                    </div>
                    <div class="bg-white p-3  shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                        <img src="/images/icons/baby icon.png" class="h-12 md:h-20 lg:h-24 xl:h-32 2xl:h-36 mx-auto px-3" alt="">
                        <p class="text-center xl:text-lg  font-bold">3800</p>
                        <p class="text-center xl:text-lg ">MTESE-TESA ICSI</p>
                    </div>
                    <div class="bg-white p-3  shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                        <img src="/images/icons/baby icon.png" class="h-12 md:h-20 lg:h-24 xl:h-32 2xl:h-36 mx-auto px-3" alt="">
                        <p class="text-center xl:text-lg  font-bold">500</p>
                        <p class="text-center xl:text-lg  ">PGS/PGD</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block bg-gray w-1/3 h-36 absolute ltr:right-0 rtl:left-0 bottom-0 "></div>
                
            
        </div>
   </div>
   
</body>
</html>