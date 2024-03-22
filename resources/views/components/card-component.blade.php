@props(['name','content','slide1','slide2','slideid'])

                    <div id="{{ $slideid }}" class="carousel-item relative mt-4">
                        <div class=" border border-gray max-w-xs  ltr:ml-12 ltr:mr-12 ">
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
                                <p class="font-franklin text-justify mr-4 ml-4">
                                {{ $content }}
                                </p>
                            </div>
                            <div class="absolute flex justify-between transform -translate-y-1/2 left-1 right-1 top-1/2">
                                <a href="{{ $slide1 }}" class=" btn btn-active btn-circle btn-ghost">❮</a> 
                                <a href="{{ $slide2 }}" class=" btn btn-active btn-circle btn-ghost">❯</a>
                            </div>
                        </div>
                    </div>
                    
               