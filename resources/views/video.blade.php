@extends('layouts.main')

@section('section')

<div class="px-4 py-2 flex items-center space-x-2 text-gray-600">
  <div class="text-sm flex">
    <nav class="text-gray-600 mb-4">
      <a href="/home-page" class="text-gray-400"> <a href="/">My Folder</a></a>
      <span class="mx-2"> &gt; </span>
      <a href="#" class="text-blue-500">Video</a>
    </nav>
  </div>
</div>


<div class=" rounded-b-lg ">
  <ul class="divide-y divide-gray-200">
    <li class="flex items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <button class="bg-blue-500 text-white rounded-full h-8 w-8 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 ml-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
          </svg>
        </button>
        <div>
          <p class="font-semibold text-gray-800">Penampakan Orang Hitam</p>
          <p class="text-xs text-gray-500">10/06/2023 01.56 PM</p>
        </div>
      </div>
      <button class="text-gray-400">
        <span class="text-2xl">⋯</span>
      </button>
    </li>

    <!-- titik titik samping file
    <li class="flex items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <button class="bg-blue-500 text-white rounded-full h-8 w-8 flex items-center justify-center">▶</button>
        <div>
          <p class="font-semibold text-gray-800">VID-101112</p>
          <p class="text-xs text-gray-500">10/06/2023 01.56 PM</p>
        </div>
      </div>
      <button class="text-gray-400">
        <span class="text-2xl">⋯</span>
      </button>
    </li>
  </ul>
</div>
</div>
<div class=" rounded-b-lg ">
  <ul class="divide-y divide-gray-200">
    <li class="flex items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <button class="bg-blue-500 text-white rounded-full h-8 w-8 flex items-center justify-center">▶</button>
        <div>
          <p class="font-semibold text-gray-800"></p>
          <p class="text-xs text-gray-500">10/06/2023 01.56 PM</p>
        </div>
      </div>
      <button class="text-gray-400">
        <span class="text-2xl">⋯</span>
      </button>
    </li>

    <li class="flex items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <button class="bg-blue-500 text-white rounded-full h-8 w-8 flex items-center justify-center">▶</button>
        <div>
          <p class="font-semibold text-gray-800">VID-101112</p>
          <p class="text-xs text-gray-500">10/06/2023 01.56 PM</p>
        </div>
      </div>
      <button class="text-gray-400">
        <span class="text-2xl">⋯</span>
      </button>
    </li>
  </ul>
</div>
</div> -->


    @endsection