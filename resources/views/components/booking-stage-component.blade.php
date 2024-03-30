<div class=" flex flex-row  text-xs justify-between lg:w-2/3">
    <a href="#stage-1" x-on.click="select = stage-1" class=" tracking-widest {{ Request::is('booking_stage_1') ? 'text-black underline underline-offset-4' : '' }}">Stage 1</a>
    <a href="#" class="{{ Request::is('booking_stage_2') ? 'text-black underline underline-offset-4' : '' }} tracking-widest">Stage 2</a>
    <a href="#" class="{{ Request::is('booking_stage_3') ? 'text-black underline underline-offset-4' : '' }} tracking-widest">Stage 3</a>
</div>
