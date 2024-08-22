@extends('layouts.main')

@section('section')
<div class="w-full max-w-md mx-auto mt-5">

    <div class="flex items-center justify-between px-4 py-2 bg-[#6A8CFF] text-white rounded-t-lg">
      <span>09.41</span>
      <div class="flex space-x-2">

        <div class="h-4 w-4 bg-black rounded-full"></div>
        <div class="h-4 w-4 bg-black rounded-full"></div>
        <div class="h-4 w-4 bg-black rounded-full"></div>
      </div>
    </div>


    <div class="px-4 py-2 flex items-center space-x-2 text-gray-600">
      <button class="text-xs">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
          </svg>

      </button>
      <div class="text-sm">
        <span>My Folder</span> &gt; <span class="text-blue-500">Videos</span>
      </div>
    </div>


    <div class=" rounded-b-lg ">
      <ul class="divide-y divide-gray-200">
        <li class="flex items-center justify-between p-4">
          <div class="flex items-center space-x-3">
            <button class="bg-blue-500 text-white rounded-full h-8 w-8 flex items-center justify-center">▶</button>
            <div>
              <p class="font-semibold text-gray-800">VID-101113</p>
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
  </div>
    <div class=" rounded-b-lg ">
      <ul class="divide-y divide-gray-200">
        <li class="flex items-center justify-between p-4">
          <div class="flex items-center space-x-3">
            <button class="bg-blue-500 text-white rounded-full h-8 w-8 flex items-center justify-center">▶</button>
            <div>
              <p class="font-semibold text-gray-800">VID-101113</p>
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
  </div>


@endsection
