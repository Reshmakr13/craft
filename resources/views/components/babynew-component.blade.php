
@props(['count','text'])
<div>
<div class="flex flex-col justify-center w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 lg:h-40 lg:w-40 xl:h-44 xl:w-44 border border-gray/30  bg-white  shadow-[10px_10px_6px_-3px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] items-center">
    <img src="/images/icons/baby icon.png" class="h-12 md:h-14 lg:h-16 xl:20 2xl:h-20 mx-auto px-3 " alt="">
    <p class="text-center text-xs lg:text-base xl:text-lg  font-bold">{{$count}}</p>
    <p class="text-center text-xs lg:text-base xl:text-lg text-darkgray ml-2 mr-2">{{$text}}</p>
</div>
</div>