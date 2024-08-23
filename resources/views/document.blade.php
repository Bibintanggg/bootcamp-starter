@extends('layouts.main')

@section('section')
    <div class="p-4">
        <nav class="text-gray-600 mb-4">
            <a href="/home-page" class="text-gray-400"> <a href="/">My Folder</a></a>
            <span class="mx-2"> &gt; </span>
            <a href="#" class="text-blue-500">Document</a>
        </nav>

        <div class="grid grid-cols-2 gap-4">
            <div class="p-4 border rounded-lg shadow-sm flex items-center space-x-4">
                <div class="text-yellow-500">
                    <!-- Icon for folder (you can use an SVG or a custom icon) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v13a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2h-7l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                </div>
                <div>
                    <div class="text-lg font-semibold">Tugas Makalah</div>
                    <div class="text-gray-500">48 files</div>
                </div>
            </div>

            <div class="p-4 border rounded-lg shadow-sm flex items-center space-x-4">
                <div class="text-yellow-500">
                    <!-- Icon for folder -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v13a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2h-7l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                </div>
                <div>
                    <div class="text-lg font-semibold">Secret Document</div>
                    <div class="text-gray-500">152 files</div>
                </div>
            </div>
        </div>
    </div>

    <body class="bg-gray-100 p-6">
        <div class="max-w-lg mx-auto bg-white p-4 rounded-lg shadow">
            <div class="flex justify-between items-center mb-4">
                <h2 class="ml-4  text-lg font-bold">Name</h2>
                <button class="text-gray-500 hover:text-gray-700 mr-72">▼</button>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <!-- Repeat this block for each file -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 1</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 2</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 3</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 4</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 5</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 6</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 7</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 8</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 9</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 10</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 11</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 12</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 13</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 14</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 15</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded flex items-center justify-center">
                        <img src="{{ asset('/images/Document.svg') }}" class="w-20 h-20">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">File name 16</p>
                </div>
                <!-- Repeat end -->
            </div>

        </div>
    </body>
@endsection
