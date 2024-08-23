@extends('layouts.main')

@section('section')

<body class=" p-4">
    <div class="max-w-2xl mx-auto  p-6">

        <nav class="text-sm text-gray-500 mb-4">
            <a href="/" class="hover:underline">My Folder</a>
            <span class="mx-2">></span>
            <a href="#" class="text-blue-500 hover:underline">Image</a>
        </nav>


        <div class="flex justify-between items-center border-b border-gray-300 mb-4">
            <div class="flex space-x-8">
                <a href="#" class="text-black font-semibold border-b-2 border-black pb-2">Gambar</a>
                <a href="/album" class="text-gray-500 hover:text-black pb-2">Album</a>
            </div>
        </div>


        <div class="grid grid-cols-2 gap-4">

        <!-- Ini bagian image -->
            <div class="relative">
                <img src="{{ asset('/images/padlan.jpg') }}" alt="Image" class="w-full h-32 object-cover rounded-lg">
                <span class="absolute bottom-2 right-2 bg-white p-1 rounded-full border border-gray-300">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v9m0 0l3-3m-3 3l-3-3m6 6H6"></path>
                    </svg>
                </span>
            </div>
            <!-- end -->
        </div>
    </div>
</body>
@endsection
