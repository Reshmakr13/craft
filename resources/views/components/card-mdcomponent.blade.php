@props(['name','content'])

                    <div  class=" mt-4 ">
                        <div class=" border border-gray max-w-xs mr-2 ml-2  ">
                            <div class="flex">
                                <div class="w-1/4 flex  justify-center">
                                    <img src="/images/icons/double qoute left1.png" class="h-12"alt="">
                                </div>
                                <div class="w-3/4 flex flex-col mt-2 ">
                                    <p class="font-bold text-base font-franklin text-black ltr:text-left rtl:text-right">{{ $name }}</p>
                                    <div class="flex">
                                    <x-rating-star />
                                     <x-rating-star />
                                     <x-rating-star />
                                     <x-rating-star />
                                     <x-rating-star />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="font-franklin lg:text-sm md:text-xs text-justify mr-4 ml-4">
                                {{ $content }}
                                </p>
                            </div>
                           
                        </div>
                    </div>
                    
               