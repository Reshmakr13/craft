<div x-show="tab === 1 " class="flex flex-col gap-4">
                <div class="flex justify-end ">
                    <a href="" @click.prevent="tab -= 1" class="flex rtl:flex-row-reverse justify-center right-0 items-center mt-5 md:mt-10 lg:mt-10 rounded-full bg-blue w-16 text-white  p-2 ">
                        <x-easyadmin::display.icon icon="icons.arrow-left" height="h-3" width="w-3"/>
                        <p class="text-xs">Back</p>
                    </a>
                </div>
<div x-data="{ selected:null }">
    <form method="POST" action="">
        @csrf
                <p class="text-base">Select Preffered Date </p>
                <div  class="mt-6">
                    <ul  class="grid grid-cols-3 sm:grid-cols-5 lg:grid-cols-10 gap-y-6 lg:gap-x-4 xl:justify-between">
                        <li @click.prevent="selected = 'Option 1'" :class="{ 'border border-blue': selected === 'Option 1' }"><x-booking-date-component /></li>
                        <li @click.prevent="selected = 'Option 2'" :class="{ 'border border-blue': selected === 'Option 2' }"><x-booking-date-component :month="'Mar'" :date="'29'" :day="'Friday'" /></li>
                        <li @click.prevent="selected = 'Option 3'" :class="{ 'border border-blue': selected === 'Option 3' }"><x-booking-date-component :month="'Mar'" :date="'30'" :day="'Saturday'"/></li>
                        <li @click.prevent="selected = 'Option 4'" :class="{ 'border border-blue': selected === 'Option 4' }"><x-booking-date-component :month="'Mar'" :date="'31'" :day="'Sunday'"/></li>
                        <li @click.prevent="selected = 'Option 5'" :class="{ 'border border-blue': selected === 'Option 5' }"><x-booking-date-component :month="'Apr'" :date="'1'" :day="'Monday'"/></li>
                        <li @click.prevent="selected = 'Option 6'" :class="{ 'border border-blue': selected === 'Option 6' }"><x-booking-date-component :month="'Apr'" :date="'2'" :day="'Tuesday'"/></li>
                        <li @click.prevent="selected = 'Option 7'" :class="{ 'border border-blue': selected === 'Option 7' }"><x-booking-date-component :month="'Apr'" :date="'2'" :day="'Wednesday'"/></li>
                        <li @click.prevent="selected = 'Option 8'" :class="{ 'border border-blue': selected === 'Option 8' }"><x-booking-date-component :month="'Apr'" :date="'4'" :day="'Thursday'"/></li>
                        <li @click.prevent="selected = 'Option 9'" :class="{ 'border border-blue': selected === 'Option 9' }"><x-booking-date-component :month="'Apr'" :date="'5'" :day="'Friday'"/></li>
                        <li @click.prevent="selected = 'Option 10'" :class="{ 'border border-blue': selected === 'Option 10'}"><x-booking-date-component :month="'Apr'" :date="'6'" :day="'Saturday'"/></li>
                    </ul>
                
                </div>
               

            
                <p class="text-base mt-6">Select Preffered Time </p>
                <ul   class="grid grid-cols-3 sm:grid-cols-5 lg:grid-cols-8 gap-y-6 lg:gap-x-4 xl:justify-between mt-4">
                    <li :="{'shadow-xl':selected === null}"><x-booking-time-component/></li>
                    <li><x-booking-time-component :time="'9:15 AM'"/></li>
                    <li><x-booking-time-component :time="'9:30 AM'"/></li>
                    <li><x-booking-time-component :time="'9:45 AM'"/></li>
                    <li><x-booking-time-component :time="'10:00 AM'"/></li>
                    <li><x-booking-time-component :time="'10:15 AM'"/></li>
                    <li><x-booking-time-component :time="'10:30 AM'"/></li>
                    <li><x-booking-time-component :time="'10:45 AM'"/></li>
                    <li><x-booking-time-component :time="'11:00 AM'"/></li>
                    <li><x-booking-time-component :time="'11:15 AM'"/></li>
                    <li><x-booking-time-component :time="'11:30AM'"/></li>
                    <li><x-booking-time-component :time="'11:45 AM'"/></li>
                    <li><x-booking-time-component :time="'12:00 PM'"/></li>
                    <li><x-booking-time-component :time="'12:15 PM'"/></li>
                    <li><x-booking-time-component :time="'12:30 PM'"/></li>
                    <li><x-booking-time-component :time="'12:45 PM'"/></li>
                    <li><x-booking-time-component :time="'1:00 PM'"/></li>
                    <li><x-booking-time-component :time="'1:15 PM'"/></li>
                    <li><x-booking-time-component :time="'1:30 PM'"/></li>
                    <li><x-booking-time-component :time="'1:45 PM'"/></li>
                    <li><x-booking-time-component :time="'2:00 PM'"/></li>
                    <li><x-booking-time-component :time="'2:15 PM'"/></li>
                    <li><x-booking-time-component :time="'2:30 PM'"/></li>
                    <li><x-booking-time-component :time="'2:45 PM'"/></li>
                    <li><x-booking-time-component :time="'3:00 PM'"/></li>
                    <li><x-booking-time-component :time="'3:15 PM'"/></li>
                    <li><x-booking-time-component :time="'3:30 PM'"/></li>
                    <li><x-booking-time-component :time="'3:45 PM'"/></li>
                    <li><x-booking-time-component :time="'4:00 PM'"/></li>
                    <li><x-booking-time-component :time="'4:15 PM'"/></li>
                    <li><x-booking-time-component :time="'4:30 PM'"/></li>
                    <li><x-booking-time-component :time="'4:45 PM'"/></li>
                </ul>
                <span class="mt-10 flex justify-end" @click.prevent="tab = 2 "><x-booking-button-component/></span>
    </form>
</div>
               
</div>