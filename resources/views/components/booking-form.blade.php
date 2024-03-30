@props(['title1'=>'Select Department','title2'=>'Select Doctor'])
<div>
    <form method="POST" action="">
        @csrf
        <div class="flex flex-col gap-4">
            <div class="relative lg:w-2/3 ">
                    <label for="title1">{{$title1}}</label>
                    <select id="title1" name="title1" type="text" autocomplete="title1"
                        class="w-full  h-10 text-gray-900 placeholder-transparent    focus:outline-none  focus:border-0 
                            border-gray"
                        required>
                    </select>
                    
            </div>
            <div class="relative lg:w-2/3  ">
                    <label for="title2">{{$title2}}</label>
                    <select id="title2" name="title2" type="text" autocomplete="title2"
                        class="w-full  h-10 text-gray-900 placeholder-transparent    focus:outline-none  focus:border-0 
                            border-gray"
                        required>
                    </select>
                    
            </div>
        </div>
    </form>
</div>