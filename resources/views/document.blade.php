@extends('layouts.main')

@section('section')
<div class="p-4">
    <div class="flex items-center text-gray-500  mb-4">
        <a href="/">
            <span class="text-gray-700 font-semibold">My Folder</span>
        </a>
        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>

        <a href="/docs">
            <span class="text-blue-500 font-semibold">Document</span>
        </a>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="p-4 border rounded-lg shadow-sm flex items-center space-x-4">
            <div class="text-yellow-500">

                <!-- Icon File -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v13a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2h-7l-2-2H5a2 2 0 00-2 2z" />
                </svg>
                <!-- Icon File End -->
            </div>
            <div>
                <a href="/makalah">
                    <div class="text-s font-semibold">Tugas Makalah</div>
                    <div class="text-gray-500">48 files</div>
                </a>
            </div>
        </div>

        <div class="p-4 border rounded-lg shadow-sm flex items-center space-x-4">
            <div class="text-yellow-500">

                <!-- Icon Folder Start -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v13a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2h-7l-2-2H5a2 2 0 00-2 2z" />
                </svg>
                <!-- Icon Folder End -->
            </div>
            <div>
                <div class="text-s font-semibold">Secret Document</div>
                <div class="text-gray-500">152 files</div>
            </div>
        </div>
    </div>
</div>

<body class="bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold">Name</h2>
            <button class="text-gray-500 hover:text-gray-700">▼</button>
        </div>
        <div class="grid grid-cols-4 gap-4">

            <!-- Bagian File Name 1 + SVG -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 rounded flex items-center justify-center">
                    <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                </div>
                <p class="mt-2 text-sm text-gray-600">File name 1</p>
            </div>


            <!-- File Name 2 + SVG -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 rounded flex items-center justify-center">
                    <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                </div>
                <p class="mt-2 text-sm text-gray-600">File name 2</p>
            </div>
            <!-- end -->
        </div>
          
    </div>
</body>
@endsection