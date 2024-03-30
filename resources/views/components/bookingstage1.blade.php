<div x-show="tab === 0 " class="flex flex-col gap-4" >
<div>
    <form method="POST" action="">
        @csrf
        <div class="flex flex-col gap-4">
            <div class="relative lg:w-2/3 ">
                    <label for="title1">Select Department</label>
                    <select id="title1" name="title1" type="text" autocomplete="title1"
                        class="w-full  h-10 text-gray-900 placeholder-transparent    focus:outline-none  focus:border-0 
                            border-gray"
                        required>
                    </select>
                    
            </div>
            <div class="relative lg:w-2/3  ">
                    <label for="title2">Select Doctor</label>
                    <select id="title2" name="title2" type="text" autocomplete="title2"
                        class="w-full  h-10 text-gray-900 placeholder-transparent    focus:outline-none  focus:border-0 
                            border-gray"
                        required>
                    </select>
                    
            </div>
            <span class="lg:mt-10 flex justify-end lg:w-2/3" @click.prevent="tab = 1 "><x-booking-button-component /></span>
        </div>
       
    </form>
</div>
    
</div>