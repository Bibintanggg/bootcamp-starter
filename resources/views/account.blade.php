@extends('layouts.main')

@section('section')

<body class="bg-blue-300">
    <div class="flex justify-center items-center ">
        <div class="rounded-lg shadow-lg w-80">
            <div class="bg-gradient-to-b from-[#1C3261] to-[#3A67C7] rounded-b-lg w p-6 relative text-center">
                <img src="{{asset('images/padlan.jpg')}}" class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
                <button class="text-white text-m font-bold">Upload Image</button>
            </div>
            <div class="px-6 py-4">
                <div class="mb-4">
                    <label for="nama" class="block text-sm text-gray-600">Nama</label>
                    <input type="text" id="nama" value="Rizqi Alfariansyah"
                        class="text-center border-none focus:ring-0 w-full text-gray-800">
                    <hr class="mt-1">
                </div>
                <div class="mb-4">
                    <label class="block text-sm text-gray-600">Gender</label>
                    <div class="flex justify-center space-x-4">
                        <button>
                            <img src="{{ asset('images/men.svg')}}" class="hover:">
                        </button>
                        <button>
                            <img src="{{ asset('images/women.svg')}}" alt="">
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-600">Email</label>
                    <input type="email" id="email" value="rizqias@gmai.com"
                        class="text-center border-none focus:ring-0 w-full text-gray-800">
                    <hr class="mt-1 border-gray-300">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm text-gray-600">Password</label>
                    <input type="password" id="password" value="*"
                        class="text-center border-none focus:ring-0 w-full text-gray-800">
                    <hr class="mt-1 border-gray-300">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm text-gray-600">No Telepon</label>
                    <input type="text" id="phone" value="081111111111"
                        class="text-center border-none focus:ring-0 w-full text-gray-800">
                    <hr class="mt-1 border-gray-300">
                </div>
                <div class="mt-6 text-center">
                    <button class="text-red-500 flex items-center justify-center mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>




@endsection