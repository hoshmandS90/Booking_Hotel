<div>
    @section('title', 'View Room')
    
    <section class="dark:bg-coolGray-800 dark:text-coolGray-100">
 
       
            <div
            class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">

            
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
           

                <h6 class="text-2xl font-bold leading-none">{{ $single_room->name_room }}

                </h6>
                <p class="mt-6 mb-8 text-lg sm:mb-12 text-justify">
                    {{ $single_room->description }}
                </p>
                <hr class="my-6">

                <p>
                    {{ $single_room->details }}
                </p>
                <hr class="my-6">
                <ul>
                    <li class="flex text-center " data-name-en="Free Toiletries">
                        <span class=""><svg class="mt-1 ml-1" fill="" size="small" width="14" height="14"
                                viewBox="0 0 128 128">
                                <path
                                    d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                </path>
                            </svg></span>
                        <p class="ml-2">Free toiletries</p>

                    </li>
                    <li class="flex text-center " data-name-en="Free Toiletries">
                        <span class=""><svg class="mt-1 ml-1" fill="" size="small" width="14" height="14"
                                viewBox="0 0 128 128">
                                <path
                                    d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                </path>
                            </svg></span>
                        <p class="ml-2">Bathrobe </p>

                    </li>

                    <li class="flex text-center " data-name-en="Free Toiletries">
                        <span class=""><svg class="mt-1 ml-1" fill="" size="small" width="14" height="14"
                                viewBox="0 0 128 128">
                                <path
                                    d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                </path>
                            </svg></span>
                        <p class="ml-2">Bath or shower
                        </p>

                    </li>

                    <li class="flex text-center " data-name-en="Free Toiletries">
                        <span class=""><svg class="mt-1 ml-1" fill="" size="small" width="14" height="14"
                                viewBox="0 0 128 128">
                                <path
                                    d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                </path>
                            </svg></span>
                        <p class="ml-2">Slippers

                        </p>

                    </li>
                    <li class="flex text-center " data-name-en="Free Toiletries">
                        <span class=""><svg class="mt-1 ml-1" fill="" size="small" width="14" height="14"
                                viewBox="0 0 128 128">
                                <path
                                    d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                </path>
                            </svg></span>
                        <p class="ml-2">Hairdryer
                        </p>

                    </li>
                    <li class="flex text-center " data-name-en="Free Toiletries">
                        <span class=""><svg class="mt-1 ml-1" fill="" size="small" width="14" height="14"
                                viewBox="0 0 128 128">
                                <path
                                    d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z">
                                </path>
                            </svg></span>
                        <p class="ml-2">Toilet paper

                        </p>

                    </li>

                </ul>

                <hr class="my-6">
                <h2 class="font-medium font-blod"> Room size     135 m²
                </h2>                           
                <div data-et-view=" MCIAFKKZaTaTaBcJPQORYPOHMQMSeRe:2  MCIAFKKZaTaTaBcJPQORYPOHMQMSeRe:3   MCIAFKKZaTaTaBcJPQORYPOHMQMSeRe:5  "></div>                          
                        <p>This double room has a electric kettle, flat-screen TV and minibar. The room offers private separate bedrooms with a bathroom featuring a Jacuzzi.</p>

                        <a href="{{ route('rooms') }}"
                        class="uppercase text-black bg-red-700 rounded-lg  text-center border bg-white px-4 mb-5  hover:bg-gray-800 hover:text-white cursor-pointer py-2 mt-5 mb-1">back</a> 
                
            </div>
            
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="{{ asset("assets/Rooms/$single_room->image") }}" alt=""
                    class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 dark:bg-coolGray-500">
            </div>
            
        </div>
        
    </section>




    
</div>
