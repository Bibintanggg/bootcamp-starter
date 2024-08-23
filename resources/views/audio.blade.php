@extends('layouts.main')

@section('section')
<nav class="text-gray-600 mb-4">
    <a href="/home-page" class="text-gray-400"> <a href="/">My Folder</a></a>
    <span class="mx-2"> &gt; </span>
    <a href="#" class="text-blue-500">Audio</a>
</nav>

<!-- Bagian List -->
<div class="space-y-2">
    <div class="flex justify-between items-center p-3 bg-gray-100 rounded-lg">
        <div class="flex items-center space-x-2">
            <button class=" text-white p-2 rounded-full">
                <img src="{{ asset('/images/1975.svg') }}" class="w-11">
            </button>
            <div>
                <h3 class="text-sm font-semibold text-gray-700">The 1975 - About You</h3>
                <span class="text-xs text-gray-500">10/06/2023 01.56 PM</span>
            </div>
        </div>
        <button class="text-gray-400 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
        </button>
    </div>
    <!-- End -->

    <!-- Bagian List -->
    <div class="space-y-2">
        <div class="flex justify-between items-center p-3 bg-gray-100 rounded-lg">
            <div class="flex items-center space-x-2">
                <button class=" text-white p-2 rounded-full">
                    <img src="{{ asset('/images/1975.svg') }}" class="w-11">
                </button>
                <div>
                    <h3 class="text-sm font-semibold text-gray-700">The 1975 - About You</h3>
                    <span class="text-xs text-gray-500">10/06/2023 01.56 PM</span>
                </div>
            </div>
            <button class="text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </button>
        </div>
        <!-- End -->

        <!-- Bagian List -->
        <div class="space-y-2">
            <div class="flex justify-between items-center p-3 bg-gray-100 rounded-lg">
                <div class="flex items-center space-x-2">
                    <button class=" text-white p-2 rounded-full">
                        <img src="{{ asset('/images/1975.svg') }}" class="w-11">
                    </button>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700">The 1975 - About You</h3>
                        <span class="text-xs text-gray-500">10/06/2023 01.56 PM</span>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
            </div>
            <!-- End -->
        </div>
    </div>

    @endsection