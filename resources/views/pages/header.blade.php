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
                <div class="flex justify-center lg:flex lg:justify-normal">
                    <img src="/images/home/baby.jpg" class=" lg:w-2/3  w-2/3 sm:w-4/5 md:w-3/4 mt-4 sm:mt-6 xl:mt-6 md:mt-16 lg:mt-6   shadow-[10px_10px_5px_2px_rgba(0,0,0,0.3)] relative z-10 "alt="baby_image">
                </div>
                <div class="flex justify-center">
                    <div class="flex flex-col justify-center lg:hidden absolute  bg-lightgray/80 z-20  text-center font-franklin w-4/5 sm:w-11/12 md:w-11/12  text-2xl md:text-3xl py-6 md:py-12 md:-mt-16  -mt-12 shadow-[0px_10px_12px_-4px_rgba(0,0,0,0.3)]">
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

<div class="relative mt-6">
    <div class="absolute bg-gray w-1/2 h-full z-0 "></div>
        <div class="flex flex-row   relative">
            <img src="/images/icons/qouteleftgray.png"  class="h-full xl:mt-4 ltr:xl:ml-3  absolute hidden md:block"alt="">
            <div class="w-1/2 ltr:ml-4 rtl:mr-4 ltr:lg:ml-16 rtl:lg:mr-16 mt-8 md:mt-16">
                <p class="text-base md:text-xl lg:text-2xl xl:text-3xl text-darkgray font-franklin pt-6">Video Testimonials</p>
                <p class="text-xs md:text-base text-darkgray font-franklin mt-3 lg:mt-8">Our patients are our best advocates, hear the inspiring stories of their treatment journey</p>
                <div class="mt-4 lg:mt-8 z-20 relative"><x-viewallbutton-component/></div>
            </div>
            <div class="w-1/2 relative">
                <div class="absolute bg-gray w-1/2 h-full z-0 ltr:-ml-2 rtl:-mr-2 ltr:lg:-ml-10 rtl:lg:-mr-10 "></div>
                <div class="relative z-10 ">
                    <iframe width="560" height="315" class="w-full lg:w-96 xl:w-4/5 h-2/3 sm:h-2/3 md:h-64 xl:h-72 mt-40 lg:mt-16 ltr:lg:ml-10 rtl:lg:mr-10"src="https://www.youtube.com/embed/0Pgrr23voYs?si=QPgjNPM6CUIpC4nC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="relative mt-4 mb-4 ltr:lg:ml-40 rtl:lg:mr-40 ltr:xl:ml-52 rtl:xl:mr-52 xl:mt-4 xl:space-x-4">
                <a href="#" class="py-1.5 px-2 lg:py-2.5 lg:px-3 xl:py-3.5 xl:px-4 border border-gray rounded-full bg-darkgray text-white">❮</a> 
                <a href="#" class=" py-1.5 px-2 lg:py-2.5 lg:px-3 xl:py-3.5 xl:px-4 border border-gray rounded-full bg-darkgray text-white">❯</a>
                </div>
            </div>
    </div>
</div>
<div class="mt-8">
    <p class="text-darkgray text-3xl text-center font-franklin">Why Is Your IVF Cycle In Craft Most Likely To Be Successful </p>
</div>

<div class="relative w-full mt-8">
    <div class="mx-auto relative w-1/2  border border-gray z-10">
        <div class="items-center flex justify-center py-4 relative">
            <img src="/images/icons/vector women pink_Mesa de trabajo 1.png" class="h-96 opacity-40" alt="pregnant_lady_image">
            <div class="absolute">
                <div class="flex justify-center ">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 items-center" width="1347" height="1259" viewBox="0 0 1347 1259" version="1.1"><path d="" stroke="none" fill="#ec649c" fill-rule="evenodd"/><path d="M 1073.442 122.118 C 1035.643 124.735, 990.730 143.169, 953.500 171.346 C 942.801 179.443, 922.712 199.136, 912.378 211.656 C 890.472 238.197, 870.910 273.025, 863.449 298.772 C 857.552 319.121, 856.616 326.010, 856.556 349.500 C 856.499 371.884, 857.162 378.422, 861.088 394.167 C 863.951 405.648, 863.638 410.236, 859.391 419.028 C 850.790 436.836, 845.236 454.991, 842.480 474.313 C 841.681 479.916, 840.579 497.775, 840.031 514 C 839.483 530.225, 838.777 546.875, 838.461 551 C 836.481 576.828, 823.831 591.667, 796.426 600.310 C 776.473 606.603, 764.438 607.197, 722 603.986 C 681.691 600.936, 651.730 600.359, 640.053 602.409 C 621.753 605.622, 608.441 611.978, 596.375 623.266 C 581.217 637.445, 572.005 655.992, 568.566 679.254 C 567.222 688.344, 565.385 728.749, 563.461 791.500 C 562.394 826.317, 560.713 833.776, 551.719 843.617 C 542.407 853.806, 538.268 855.527, 500.501 864.921 C 479.987 870.024, 473.426 872.024, 473.191 873.248 C 472.688 875.856, 479.919 876.321, 501.129 875.044 C 521.169 873.837, 533.961 872.077, 542.500 869.350 C 560.915 863.470, 576.627 849.159, 585.003 830.637 C 590.021 819.540, 591.763 811.777, 598.965 768.400 C 608.757 709.426, 613.535 689.357, 621.278 674.687 C 628.229 661.516, 640.561 655.103, 656.331 656.458 C 668.881 657.536, 678.372 659.592, 696.173 665.092 C 715.987 671.213, 731.793 675.141, 748.743 678.155 C 759.739 680.111, 765.020 680.429, 787 680.462 C 804.011 680.487, 815.330 680.043, 821 679.126 C 857.146 673.283, 884.957 651.241, 903.804 613.499 C 915.114 590.848, 922.382 563.038, 928.500 519 C 930.568 504.112, 936.715 478.573, 938.871 475.910 C 940.504 473.894, 941.490 473.830, 974.026 473.620 C 1001.487 473.442, 1009.027 473.087, 1016 471.642 C 1057.571 463.028, 1101.383 438.607, 1134.594 405.538 C 1174.214 366.087, 1200.757 317.051, 1207.605 270.654 C 1208.873 262.065, 1209.120 255.476, 1208.680 242 C 1207.234 197.708, 1193.700 168.706, 1164.075 146.420 C 1138.876 127.463, 1109.606 119.614, 1073.442 122.118 M 506.520 345.115 C 490.798 347.404, 471.760 353.992, 453 363.635 C 417.867 381.693, 391.206 409.336, 371.438 448.201 C 354.435 481.628, 350.224 511.478, 358.133 542.500 C 360.505 551.800, 360.200 555.070, 356.126 564.077 C 349.146 579.509, 346.867 591.994, 344.004 630.500 C 341.760 660.671, 340.787 667.495, 337.919 673.142 C 334.023 680.814, 320.062 690.446, 308.458 693.469 C 301.444 695.296, 284.164 695.452, 253.178 693.968 C 216.398 692.206, 199.386 692.322, 192.500 694.383 C 175.924 699.345, 159.577 712.727, 152.657 727 C 146.741 739.200, 145.389 752.200, 142.984 820 C 141.840 852.255, 140.908 858.352, 135.935 866.102 C 130.347 874.810, 123.517 878.152, 99.500 883.933 C 80.901 888.409, 78 889.379, 78 891.119 C 78 891.979, 82.860 892.137, 96.750 891.728 C 124.872 890.899, 137.021 886.950, 148.516 874.898 C 158.606 864.319, 160.201 859.023, 169.459 805.345 C 172.480 787.830, 175.893 770.132, 177.044 766.016 C 181.051 751.687, 189.274 739.452, 197.831 735.086 C 205.361 731.245, 206.395 731.355, 247.062 740.339 C 268.203 745.009, 289.325 749.616, 294 750.577 C 306.016 753.046, 323.094 752.830, 333.500 750.075 C 357.590 743.700, 379.151 725.684, 390.438 702.500 C 397.562 687.867, 400.070 678.005, 407.517 635.327 C 409.932 621.481, 412.566 608.580, 413.370 606.657 C 415.760 600.937, 417.104 600.649, 442 600.516 C 461.485 600.412, 465.801 600.096, 474.209 598.153 C 494.559 593.450, 508.368 587.275, 527.100 574.500 C 570.178 545.123, 595.838 511.972, 606.051 472.500 C 609.963 457.381, 611.223 446.994, 611.206 430 C 611.190 412.330, 609.356 404.227, 602 389.302 C 595.880 376.886, 584.845 364.535, 573.649 357.567 C 556.787 347.074, 528.764 341.875, 506.520 345.115 M 1057 636.626 C 1037.218 640.271, 1007.945 652.936, 990.827 665.257 C 957.356 689.349, 929.390 725.475, 918.644 758.500 C 912.154 778.447, 910.387 800.107, 913.627 820 C 914.657 826.325, 915.463 835.100, 915.417 839.500 C 915.345 846.536, 914.786 848.886, 910.784 859 C 903.152 878.290, 901.491 887.417, 899.969 918.440 C 898.491 948.579, 897.314 958.448, 894.543 963.916 C 889.505 973.857, 877.180 981.786, 863 984.208 C 851.534 986.167, 804.973 985.860, 787.798 983.713 C 763.643 980.693, 753.800 981.846, 738.260 989.517 C 722.766 997.164, 710.386 1011.506, 705.041 1028 C 702.091 1037.106, 701.261 1047.828, 700.010 1093 C 698.782 1137.334, 698.043 1145.276, 694.460 1152.642 C 691.646 1158.427, 685.226 1164.824, 679.094 1167.952 C 675.853 1169.606, 656.234 1174.950, 640.343 1178.509 C 638.707 1178.875, 638.321 1179.510, 638.745 1181.135 C 639.280 1183.179, 639.701 1183.249, 647.903 1182.658 C 652.631 1182.316, 663.025 1181.130, 671 1180.020 C 682.454 1178.427, 686.804 1177.364, 691.709 1174.959 C 702.569 1169.634, 714.163 1154.497, 718.386 1140.128 C 719.254 1137.174, 721.562 1125.924, 723.515 1115.128 C 731.749 1069.602, 737.504 1043.846, 740.946 1037.114 C 744.812 1029.555, 751.523 1024.779, 760.023 1023.536 C 765.757 1022.698, 779.581 1025.392, 800.009 1031.328 C 825.292 1038.674, 839.659 1041.144, 860.564 1041.741 C 875.169 1042.158, 880.243 1041.930, 887.064 1040.550 C 913.454 1035.212, 932.968 1018.986, 947.258 990.500 C 955.135 974.799, 958.488 962.005, 965.950 919.171 C 970.012 895.853, 971.004 892.155, 973.285 891.824 C 973.953 891.727, 983.950 891.587, 995.500 891.512 C 1019.348 891.358, 1025.998 890.337, 1045.500 883.835 C 1093.027 867.988, 1129.253 835.314, 1154.026 785.948 C 1172.466 749.203, 1173.893 710.099, 1157.954 678.310 C 1147.439 657.339, 1131.391 644.904, 1106.421 638.379 C 1093.573 635.022, 1070.206 634.193, 1057 636.626" stroke="none" fill="#ec64a4" fill-rule="evenodd"/></svg>
                    </div>
                    <div class="items-center mt-1">
                        <p class="font-bold font-lg font-questrial ">100% non-donor policy</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <p class="z-0 text-sm lg:text-base font-normal font-questrial text-justify ml-16 mr-16">We’re the only centre in India that strictly follows a non-donor (self-parentage) IVF policy. We truly believe in 100% biological parentage. Hence with us, the end result is your own blood. To ensure that all babies born through IVF are biologically yours, we use an RI Witnessing system through Radio Frequency Identification (RFID) to detect and monitor all activity in the IVF Laboratory. The system helps mitigate the risk of human error there by ensuring that all embryos transferred are yours and yours alone.  </p>
                </div>
            </div>
        </div>
        
    </div>
 
    
    <div class="absolute w-full h-auto top-16  left-3 xl:left-0 z-50 flex flex-row space-x-96 ">
            <div class=" w-1/2 flex flex-col justify-start space-y-4">
                <div class="flex flex-row space-x-4 ">
                <x-cycle-component/>
                <x-cycle-component/>
                </div>
                

                <div  class="flex flex-row space-x-4">
                    
                <x-cycle-component/>
                <x-cycle-component/>
                </div>
            </div>

            <div class=" w-1/2 flex flex-col justify-end space-y-4 ">
                <div class="flex flex-row space-x-4 ">
                    <x-cycle-component/>
                    <x-cycle-component/>
                </div>
                

                <div  class="flex flex-row space-x-4">
                    
                <x-cycle-component/>
                <x-cycle-component/>
                </div>
            </div>

            
    </div>


</div>








</body>
</html>