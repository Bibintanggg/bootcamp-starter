@extends('layouts.main')

@section('section')

<div class=" min-h-screen">
    <!-- Header -->
    <div class="flex items-center justify-between mb-5">
        <div>
            <h2 class="text-sm font-semibold text-gray-900">Welcome Back Bintang</h2>
            <p class="text-xl font-black text-gray-800">Your Storage Almost Full</p>
        </div>
        <a href="/account">
            <img src="{{asset('images/padlan.jpg')}}" alt="Profile" class="w-10 h-10 rounded-full">
        </a>
    </div>
    <!-- Ending Header -->

    <!-- Search Features -->
    <div class="relative mb-6">
        <input type="text" placeholder="Search File" class="w-full px-4 py-2 border rounded-lg">
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
        <button>
            <div class="p-3 ml-3 transform scale-80">
                <h1 class="text-xl font-semibold text-gray-800 mb-6 mr-60">My Folders</h1>
                <div class="grid grid-cols-4 gap-4">
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">

                            <!-- Icon for Images -->
                            <a href="/image">
                                <img src="{{ asset('/images/Image.svg') }}" class="w-10 h-10">
                            </a>
                        </div>
                        <p class="mt-2 text-gray-700">Images</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">

                            <!-- Icon for Videos -->
                            <a href="/video">
                                <img src="{{ asset('/images/Video.svg') }}" class="w-10 h-10">
                                </a>
                        </div>
                        <span class="mt-2 text-gray-700">Videos</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">

                            <!-- Icon for Audios -->
                            <a href="/audio">
                                <img src="{{ asset('/images/Audio.svg') }}" class="w-10 h-10">
                                </a>
                        </div>
                        <span class="mt-2 text-gray-700">Audios</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">
                            <!-- Icon for Document -->
                            <a href="/docs">
                                <img src="{{ asset('/images/Document.svg') }}" class="w-10 h-10">
                            </a>
                        </div>
                        <span class="mt-2 text-gray-700">Document</span>

                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">

                            <!-- Icon for Download -->
                            <a href="/download">
                                <img src="{{ asset('/images/Download.svg') }}" class="w-10 h-10">
                            </a>
                        </div>
                        <span class="mt-2 text-gray-700">Download</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">

                            <!-- Icon for Zip File -->
                            <a href="/zipfile">
                                <img src="{{ asset('/images/ZIP.svg') }}" class="w-10 h-10">
                            </a>
                        </div>
                        <span class="mt-2 text-gray-700">Zip File</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">

                            <!-- Icon for App -->
                            <a href="/app">
                                <img src="{{ asset('/images/app.svg') }}" alt="App" class="w-10 h-10">
                            </a>
                        </div>
                        <span class="mt-2 text-gray-700">App</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-4 rounded-xl">
                            <!-- Icon for More -->
                                <a href="/more">
                                    <img src="{{ asset('/images/More.svg') }}" alt="App" class="w-10 h-10">
                                </a>
                        </div>
                        <span class="mt-2 text-gray-700">More</span>
                    </div>
                </div>
            </div>
        </button>
        <!-- Ending My Folders -->

        <!-- Recent Files -->
        <div class=" p-6 rounded-lg w-80 transform scale-105">
            <h2 class="text-xl mb-4 font-semibold">Recent Files</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow-sm w-80">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-md">
                            <img src="{{ asset('/images/doc.svg') }}" class="w-5 h-5">
                        </div>
                        <div>
                            <p class="font-medium">DOC-13971932940</p>
                            <p class="text-sm text-gray-500">14/06/2023 11.40 AM</p>
                        </div>
                    </div>
                    <div class="text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>

                    </div>
                </div>

                <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow-sm w-80">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-md">
                            <img src="{{ asset('/images/play.svg') }}" class="w-5 h-5">
                        </div>
                        <div>
                            <p class="font-medium">VID-101113</p>
                            <p class="text-sm text-gray-500">10/06/2023 01.56 PM</p>
                        </div>
                    </div>
                    <div class="text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>

                    </div>
                </div>

                <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow-sm w-80">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-md">
                            <img src="{{ asset('/images/galeri.svg') }}" class="w-5 h-5">
                        </div>
                        <div>
                            <p class="font-medium">IMG-12008</p>
                            <p class="text-sm text-gray-500">09/06/2023 01.40 AM</p>
                        </div>
                    </div>
                    <div class="text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>

                    </div>
                </div>
            </div>

            <div class="mt-6 ml-72">
                <button class="bg-gray-800 text-white rounded-full p-3 shadow-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Konten -->



        @endsection
