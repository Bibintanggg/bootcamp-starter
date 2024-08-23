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
                <span class="absolute bottom-2 right-2 bg-white p-1 rounded-full border border-gray-300 w-5 h-5">
                    
                </span>
            </div>
            <!-- end -->
        </div>
    </div>
</body>

@endsection
