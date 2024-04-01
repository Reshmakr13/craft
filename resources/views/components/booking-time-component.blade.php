@props(['time'=>'9:00 AM'])
<button :class="{'cursor-not-allowed': !selected}" class="w-28 h-12 lg:w-24 xl:w-28 shadow-lg  border border-gray/25 flex flex-col items-center justify-center ">
    <p class="text-base">{{$time}}</p>
    
</button>