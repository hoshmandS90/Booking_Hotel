<div>
    @section('title','Book Now')
    <div class="my-6 px-8">
        <div class="mt-10   sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-500 hover:text-gray-900 cursor-pointer">
                            Personal Information</h3>
                        <img src="{{ asset('assets/img/forms.jpg') }}"
                            class="mt-1 rounded-lg w-full  img-responsive img-fluid object-cover "
                            title="Hotel Ramada Sulayimaniah">
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form wire:submit.prevent="save">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">first
                                            name</label>
                                        <input wire:model.defer="first_name" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                        dark:focus:shadow-outline-gray form-input">
                                        @error('first_name')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">last
                                            name</label>
                                        <input wire:model.defer="last_name" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                         dark:focus:shadow-outline-gray form-input">
                                        @error('last_name')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>



                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">email
                                            address</label>
                                        <input wire:model.defer="email" type="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                         dark:focus:shadow-outline-gray form-input">
                                        @error('email')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">phone
                                            number</label>
                                        <input wire:model.defer="phone" type="number" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                          dark:focus:shadow-outline-gray form-input">
                                        @error('phone')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <span class="text-gray-700 text-sm text-gray-400 capitalize">
                                            perfer method of contact
                                        </span>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                <input wire:model.defer="perfer_method" type="radio"
                                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                    name="accountType" value="0">
                                                <span class="ml-2 capitalize">email</span>
                                            </label>
                                            <label
                                                class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                <input wire:model.defer="perfer_method" type="radio"
                                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                    name="accountType" value="1">
                                                <span class="ml-2 capitalize">phone number</span>
                                            </label>


                                        </div>
                                        @error('perfer_method')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>
                                </div>
                                <div class=" mt-5" aria-hidden="true">
                                    <div class="py-5">
                                        <div class="border-t border-gray-200"></div>
                                    </div>
                                </div>

                                <h3 class=" font-medium leading-6 text-gray-500 hover:text-gray-900 mb-3 ">WEDDING
                                    INFORMATION</h3>
                                <div class="grid grid-cols-6 gap-6 mb-5">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">number of
                                            guests</label>
                                        <input wire:model.defer="number_of_guests" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                         dark:focus:shadow-outline-gray form-input">
                                        @error('number_of_guests')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">number of
                                            guest rooms</label>
                                        <input wire:model.defer="number_of_rooms" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                          dark:focus:shadow-outline-gray form-input">
                                        @error('number_of_rooms')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-6 mb-5">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">check
                                            in</label>
                                        <input wire:model.defer="check_in" type="date" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                         dark:focus:shadow-outline-gray form-input">
                                        @error('check_in')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 capitalize">check
                                            out</label>
                                        <input wire:model.defer="check_out" type="date" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 
                          dark:focus:shadow-outline-gray form-input">
                                        @error('check_out')<small
                                            class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror

                                    </div>
                                </div>
                                <label class="block mt-4 text-sm">
                                    <span class="block text-sm font-medium text-gray-700 capitalize">additional
                                        comments</span>
                                    <textarea wire:model.defer="additional_comments" class="block  mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none
                         focus:shadow-outline-purple dark:focus:shadow-outline-gray" cols="100" rows="3"></textarea>
                                    @error('additional_comments')<small
                                        class="text-red-500 mt-1 mb-2 text-xs">{{ $message }}</small>@enderror


                                </label>


                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600
                     hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    book now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <div class=" my-20" aria-hidden="true">
            <div class="py-5">
                <div class=""></div>
            </div>
        </div>

        <img src="{{ asset('assets/img/forms2.jpg') }}" alt=""
            class="w-5/6 mx-auto mb-12 mt-20 rounded-lg shadow-md lg:-mt-40 dark:bg-coolGray-500">

    </div>
</div>
