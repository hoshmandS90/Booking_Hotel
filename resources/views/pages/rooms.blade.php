<div>
    @section('title','Rooms')

    <section class="dark:bg-coolGray-800 dark:text-coolGray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
    @foreach ($Rooms as $row)
            @if ($row->id ==1)
            <div href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full    lg:grid lg:grid-cols-12">


                <img src="{{ asset("assets/Rooms/$row->image") }}" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-coolGray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold  ">{{ $row->name_room }}</h3>
                    <span class="text-xs text-gray-400">{{ $row->created_at->format('M d,Y') }}</span>
                    <p class="mb-4">{{ $row->description }}</p>
                    <br>
                    <div class="flex space-x-2 mt-4">
                        <a href="{{ route('view',$row->id) }}"
                            class="uppercase  rounded-lg text-black border bg-white px-4 hover:bg-gray-800 hover:text-white cursor-pointer py-2 mt-5 mb-1">details</a>

                    </div>


                </div>
            </div>
            @elseif($row->id ==2)
            <div rel="" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full    lg:grid lg:grid-cols-12">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold  ">{{ $row->name_room }}</h3>
                    <span class="text-xs text-gray-400">{{ $row->created_at->format('M d,Y') }}</span>
                    <p class="mb-4">{{ $row->description }}</p><br>
                    <div class="flex space-x-2 mt-4">
                        <a href="{{ route('view',$row->id) }}"
                            class="uppercase  rounded-lg text-black border bg-white px-4 hover:bg-gray-800 hover:text-white cursor-pointer py-2 mt-5 mb-1">details</a>

                    </div>
                </div>
                <img src="{{ asset("assets/Rooms/$row->image") }}" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-coolGray-500">

            </div>
            @else
            <div rel="" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full    lg:grid lg:grid-cols-12">
                <img src="{{ asset("assets/Rooms/$row->image") }}" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-coolGray-500">

                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold  ">{{ $row->name_room }}</h3>
                    <span class="text-xs text-gray-400">{{ $row->created_at->format('M d,Y') }}</span>
                    <p class="mb-4">{{ $row->description }}</p><br>
                    <div class="flex space-x-2 mt-4">
                        <a href="{{ route('view',$row->id) }}"
                            class="uppercase  rounded-lg text-black border bg-white px-4 hover:bg-gray-800 hover:text-white cursor-pointer py-2 mt-5 mb-1">details</a>

                    </div>
                </div>

            </div>
            @endif
 @endforeach





        </div>
    </section>
</div>
