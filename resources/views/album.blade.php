@extends('layouts.main')

@section('section')
<div class=" p-4 rounded-lg w-96">
    <!-- headder -->
    <a href="/">

        <div class="flex items-center mb-4">

    </a>
    </button>
    <div class="ml-2 text-sm text-gray-500 flex items-center">
        <a href="/">
            <span>My Folder</span>
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="w-4 h-4 mx-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
        <span class="text-blue-500">Image</span>
    </div>
</div>
<!-- end -->

<!-- Image and Album Section -->
<div class="flex items-center justify-between text-sm font-medium mb-2">
    <a href="/image">

        <div class="flex-1 text-center text-black border-b-2 border-transparent">
            Gambar
    </a>
</div>
<a href="/album">
    <div class="flex-1 text-center text-black border-b-2 border-blue-500">
        Album
</a>
</div>
</div>

<div class="border-b border-gray-300 mb-4"></div>

<!-- Foto 1 -->
<div class="space-y-4">
    <div class="flex items-center">
        <img src="{{ asset('/images/padlan.jpg') }}" class="w-12 h-12 rounded-md mr-3">
        <div>
            <p class="text-black font-semibold">WhatsApp <span class="text-gray-500 font-normal">(1203910)</span>
            </p>
        </div>
    </div>

    <!-- Foto 2 -->
    <div class="flex items-center">
        <img src="{{ asset('/images/padlan.jpg') }}" class="w-12 h-12 rounded-md mr-3">
        <div>
            <p class="text-black font-semibold">Pictures <span class="text-gray-500 font-normal">(1102)</span></p>
        </div>
    </div>

    <!-- Foto 3 -->
    <div class="flex items-center">
        <img src="{{ asset('/images/padlan.jpg') }}" class="w-12 h-12 rounded-md mr-3">
        <div>
            <p class="text-black font-semibold">Favorite <span class="text-gray-500 font-normal">(11029)</span></p>
        </div>
    </div>

    <!-- Foto 4 -->
    <div class="flex items-center">
        <img src="{{ asset('/images/padlan.jpg') }}" class="w-12 h-12 rounded-md mr-3">
        <div>
            <p class="text-black font-semibold">Instagram <span class="text-gray-500 font-normal">(2038)</span></p>
        </div>
    </div>
</div>
</div>

@endsection