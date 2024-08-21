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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-gray-700">Images</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Videos -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-gray-700">Videos</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Audios -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-gray-700">Audios</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Document -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-gray-700">Document</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Download -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                    </div>
                    <span class="mt-2 text-gray-700">Download</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for Zip File -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                        </svg>

                    </div>
                    <span class="mt-2 text-gray-700">Zip File</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for App -->
                        <img src="" alt="App" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-gray-700">App</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 p-4 rounded-xl">

                        <!-- Icon for More -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                    </div>
                    <span class="mt-2 text-gray-700">More</span>
                </div>
            </div>
        </div>
        <!-- Ending My Folders -->

        <!-- Recent Files -->
    


        @endsection