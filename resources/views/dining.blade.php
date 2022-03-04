<div>

    @section('title', 'Dining')
    <div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('/assets/img/rest.jpg');">
        <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center">
            <div class="mx-4 text-center text-white">
                <h1 class="font-bold text-6xl mb-4 capitalize font-semibold">The dining room</h1>

            </div>
        </div>
    </div>

    <div class="container flex flex-col justify-center p-4 mx-auto md:p-8 mb-20">
        <div class="grid gap-10 md:gap-8 sm:p-3 md:grid-cols-2 lg:px-12 xl:px-32">
            <div class="flex flex-col justify-center">
                <h2 class="mb-5 text-4xl font-bold leading-none text-green-900  sm:text-5xl">Welcome to paradise for
                    your
                    palate</h2>
                <p>
                    Tonight sounds like the perfect night for dinner on the beach under the stars. Maybe you prefer the
                    indoor air-conditioned elegance of our dining room. Either way, you’re going to be pampered.
                </p>
            </div>


            <div class="flex justify-center space-x-16 flex-wrap">
                <div class="flex flex-col justify-center">
                    <h3 class="font-semibold font-bold text-black">LOCATION</h3>
                    <p class="mt-1 dark:text-coolGray-400">Lorem ipsa!</p>
                    <a href="" class="mb-2 text-yellow-900 underline space-underline">28500 Overseas Highway </a>
                    <a href="" class="mb-4 text-yellow-900 underline space-underline"> Little Torch Key, FL 33042</a>
                    <h3 class="font-semibold font-bold text-black">RESERVATIONS</h3>
                    <a href="" class="mb-4 text-yellow-900 underline space-underline">305-422-4236</a>

                </div>
                <div class="flex flex-col justify-center">
                    <h3 class="font-semibold font-bold text-black">WANT MORE?</h3>
                    <a href="" class="mb-2 text-yellow-900 underline space-underline">Private Dining</a>
                    <a href="" class="mb-2 text-yellow-900 underline space-underline">In-Room Dining</a>
                    <a href="" class="mb-2 text-yellow-900 underline space-underline">Photos</a>

                </div>


            </div>

        </div>
    </div>


    <div class="container p-6  mx-auto  lg:px-2 lg:max-w-7xl">

        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">

            <div aria-hidden="true" class="mt-10 lg:mt-0">
                <img src="{{ asset('assets/Dining/1.jpg') }}" alt=""
                    class="mx-auto rounded-lg shadow-lg dark:bg-coolGray-500">
            </div>
            <div>
                <div class="">
                    <div class="overflow-x-auto">
                        <div class="flex items-center justify-center  font-sans ">
                            <div class="w-full lg:w-5/6">
                                <div class="bg-white shadow-md rounded my-6">
                                    <table class="min-w-max w-full table-auto">
                                        <thead>
                                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                                <th class="py-3 px-6 text-left">MENU</th>
                                                <th class="py-3 px-6 text-left">DAYS</th>
                                                <th class="py-3 px-6 text-center">HOURS</th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 text-sm font-light">
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">


                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 ">Breakfast</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 "> Mon-Sun</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 ">8:00am – 10:30am</span>
                                                </td>
                                            </tr>

                                            <tr class="border-b border-gray-200 hover:bg-gray-100">


                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 ">Lunch</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 "> Mon-Sun</span>
                                                </td>
                                                <td class="py-3 px-6 text-center"> 11:30am – 2:30pm</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">


                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 ">Dinner</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 "> Mon-Sun</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class=" text-gray-600 py-1 px-3 ">6:00pm – 10:00pm</span>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                </div>
                                <hr class="my-2">
                                <button class="bg-yellow-700 px-3 text-center text-white py-2 rounded-lg uppercase">
                                    View Menus
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>






    </div>


    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">

        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
            <div class="">
                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl text-blue-900">About The Dining Room</h3>
                <p class="mt-3 mb-4 text-lg text-gray-600 w">
                    Resort guests are welcome to join us, daily, for breakfast,<br>
                    lunch and dinner, as well as for our Sunday Brunch,<br>
                    monthly full moon dinners and wine-maker events.
                </p>
                <a href="" class="mb-2 text-green-600  mt-6 hover:underline font-bold uppercase mb-2">dress code</a>
            </div>
            <div aria-hidden="true" class="mt-10 lg:mt-0">
                <img src="{{ asset('assets/Dining/2.jpg') }}" alt=""
                    class="mx-auto rounded-lg shadow-lg dark:bg-coolGray-500">
            </div>
        </div>

    </div>

    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">

        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
            <div aria-hidden="true" class="mt-10 lg:mt-0">
                <img src="{{ asset('assets/Dining/3.jpg') }}" alt=""
                    class="mx-auto rounded-lg shadow-lg dark:bg-coolGray-500">
            </div>
            <div class="">
                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl text-blue-900">Special Events</h3>
                <p class="mt-3 text-lg text-gray-600 w">
                    We offer an unforgettable Sunday brunch,<br>
                    monthly full moon dinners, and wine-maker events.
                </p>
            </div>

        </div>

    </div>

    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">

        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">

            <div class="">
                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl text-blue-900"> Off-Island Guest Dining</h3>
                <p class="mt-3 text-lg text-gray-600 w">
                    We accept very limited off-island reservations in our dining room. <br>
                    This is based on our occupancy and ensures that the<br>
                    exclusive nature of the island is maintained for our guests.<br>
                    To inquire aboutoff-island guest reservations, please e-mail <br>
                    your request to <a href=""
                        class="text-yellow-600 hover:underline">diningroom@littlepalmisland.com.</a>
                </p>
            </div>

            <div aria-hidden="true" class="mt-10 lg:mt-0">
                <img src="{{ asset('assets/Dining/4.jpg') }}" alt=""
                    class="mx-auto rounded-lg shadow-lg dark:bg-coolGray-500">
            </div>

        </div>

    </div>

    <div class="p-5 mt-8 mx-auto sm:p-10 md:p-16  ">
        <div class="flex flex-col mx-auto  rounded">
            <img src="{{ asset('assets/Dining/5.jpg') }}" alt="" class="w-full h-full dark:bg-coolGray-500">
            <div class="p-6  m-10  -mt-16   sm:px-10 sm:mx-12 lg:rounded-md "
                style="background-color: rgba(198,165,101,.95);max-width: 400px;">
                <div class="space-y-2">
                    <h3 class="text-white capitalize font-bold"
                        style="color: #fff !important; transition: none !important;">The Tradition Continues</h3>

                    <p class="" class="text-white capitalize "
                        style="color: #fff !important; transition: none !important;">
                        Guests can once again find themselves at the iconic Monkey Hut.
                        Re-created to embrace natural elements of the past and found items,
                        from the sea, surrounded by stunning views.</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
