@extends('layouts.main')

@section('section')

<div class="bg-gray-100 min-h-screen p-5">
    <!-- Header -->
    <div class="flex items-center justify-between mb-5">
        <div>
            <h2 class="text-sm font-semibold text-gray-900">Welcome Back Bintang</h2>
            <p class="text-xl font-black text-gray-800">Your Storage Almost Full</p>
        </div>
        <img src="{{asset('images/padlan.jpg')}}" alt="Profile" class="w-10 h-10 rounded-full">
    </div>
    <!-- Ending Header -->

    <!-- Search Features -->
    <div class="relative mb-6">
        <input type="text" placeholder="Search File" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
        <button class="absolute right-2 top-2 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </button>
        <!-- Ending Search -->


        <!-- Internal Storage -->
        <div class="bg-gradient-to-r from-[#5A7EF8] to-[#38487E] text-white rounded-xl p-4 mb-6 mt-5">
            <div class="flex items-center justify-between">
                <div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>

                        <span>Internal Storage</span>
                    </div>
                    <p class="text-sm font-semibold ml-6">94GB / 128GB</p>
                </div>
            </div>
        </div>
        <!-- Internal Storage Ending -->

        <!-- My Folders -->
        <!-- Text My Folders -->
        <div class="p-2 bg-gray-100">
            <h1 class="text-xl font-semibold text-gray-800 mb-6">My Folders</h1>
            <div class="grid grid-cols-4 gap-4">
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Images -->
                        <img src="{{ asset('/images/Image.svg') }}" alt="Images" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">Images</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Videos -->
                        <img src="{{ asset('/images/Video.svg') }}" alt="Videos" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">Videos</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Audios -->
                        <img src="{{ asset('/images/Audio.svg') }}" alt="Audios" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">Audios</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Document -->
                        <img src="{{ asset('/images/Document.svg') }}" alt="Document" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">Document</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Download -->
                        <img src="{{ asset('/images/Download.svg') }}" alt="Download" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">Download</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Zip File -->
                        <img src="{{ asset('/images/ZIP.svg') }}" alt="Zip" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">Zip File</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for App -->
                        <img src="{{ asset('/images/app.svg') }}" alt="App" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">App</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for More -->
                        <img src="{{ asset('/images/More.svg') }}" alt="More" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">More</span>
                </div>
            </div>
        </div>
        <!-- Ending My Folders -->

        <!-- Recent Files -->

        @endsection
