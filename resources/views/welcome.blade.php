@extends('layouts.master')

@section('title','Welcome')

@section('content')



<section>
	<div class="dark:bg-violet-400">
		<div class="container flex flex-col items-center px-4 py-16 pb-24 mx-auto text-center lg:pb-56 md:py-32 md:px-10 lg:px-32 dark:text-coolGray-900">
			<h1 class="text-2xl font-bold  xl:max-w-3xl text-gray-900 uppercase text-red-500">hotel ramada sulaymaniyah</h1>
			<p class="mt-6 mb-8 text-lg sm:mb-12 xl:max-w-3xl text-gray-900">
                Located within the heart of <span class="text-gray-400">Sulaymaniyah</span>, close to major commercial areas and within close proximity of Sulaymaniyah International Airport, our hotel is the right choice for you
            </p>
			<div class="flex flex-wrap justify-center">
				<a href="#" type="button" class="px-8 py-3 m-2 text-lg font-semibold rounded bg-gray-700 text-gray-50 hover:bg-gray-900 hover:text-gray-100">Get started</a>
				<a href="{{ route('book') }}"type="button" class="px-8 py-3 m-2 text-lg border bg-red-600 hover:bg-red-800  text-white uppercase">Make  reservation</a>
			</div>
		</div>
	</div>
	<img src="{{ asset('assets/img/27667122019_Cover new logo.jpg') }}" alt="" class="w-5/6 mx-auto mb-12 mt-20 rounded-lg shadow-md lg:-mt-40 dark:bg-coolGray-500">
</section>


<!-- component -->
<section class="py-48 bg-white flex flex-col justify-center">
    <div class="grid grid-cols-2 gap-10 max-w-6xl mx-auto">
      <div class="-mt-20 flex justify-end">
        <img class="w-2/3 h-2/3 object-cover rounded-lg overflow-hidden" src="{{ asset('assets/welcome/1.jpg') }}" />
      </div>
      <div class="flex justify-start">
        <img class="rounded-lg object-cover overflow-hidden" src="{{ asset('assets/welcome/2.jpg') }}" />
      </div>
      <div class="-mt-64 flex justify-start">
        <img class="rounded-lg object-cover overflow-hidden" src="{{ asset('assets/welcome/3.jpg') }}" />
      </div>
      <div class="flex justify-start -mr-28 ml-28">
        <img class="w-2/3 h-2/3 object-cover rounded-lg overflow-hidden" src="{{ asset('assets/welcome/4.jpg') }}" />
      </div>

    </div>
  </section>


    
@endsection