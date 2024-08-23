@extends('layouts.main')

@section('section')

<body class="bg-gray-100 p-4">
    <div class="max-w-2xl mx-auto p-6">

        <nav class="text-sm text-gray-500 mb-4">
            <a href="/" class="hover:underline">My Folder</a>
            <span class="mx-2">></span>
            <a href="#" class="text-blue-500 hover:underline">Image</a>
        </nav>

        <div class="flex space-x-8">
            <a href="/image" class=" text-gray-500 pb-2">Gambar</a>
            <a href="" class=" hover:text-black border-b-2 text-black font-semibold border-black pb-2">Album</a>
        </div>

        <!-- end -->

        <!-- Image and Album Section -->
        <a href="">
            <div class="flex-1 text-center text-black border-b-">


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