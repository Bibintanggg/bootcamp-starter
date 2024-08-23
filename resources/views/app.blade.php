@extends('layouts.main')

@section('section')
<div class=min-h-screen p-4">
    <div class="flex items-center text-gray-500  mb-4 ml-4 mt-5">
        <a href="/">
            <span class="text-gray-700 font-semibold">My Folder</span>
        </a>
        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>

        <span class="text-blue-500 font-semibold">App</span>
    </div>
    <div class="space-y-4">
        <!-- WhatsApp -->
        <div class="flex items-center justify-between bg-white rounded-3xl p-3 shadow-sm">
            <div class="flex items-center">
                <img src="{{ asset('/images/WhatsApp.svg') }}" alt="Whatsapp" class="w-10 h-10 rounded-full">
                <div class="ml-3">

                    <p class="text-gray-800 font-medium">Whatsapp</p>
                    <p class="text-sm text-gray-500">10/06/2023 01:56 PM</p>

                </div>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

            </div>
        </div>

        <!-- Item 2 -->
        <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow-sm">
            <div class="flex items-center">
                <img src="{{ asset('/images/Instagram.svg') }}" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <a href="https://www.instagram.com/bintang.ydha_?igsh=azhiMTB0bHowZjEw ">

                        <p class="text-gray-800 font-medium">Instagram</p>
                        <p class="text-sm text-gray-500">10/06/2023 01:56 PM</p>
                    </a>
                </div>
            </div>
            <div>
                <button class="text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-between bg-white rounded-lg p-3 shadow-sm">
            <div class="flex items-center">
                <img src="{{ asset('/images/spoti.svg') }}" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <a href="https://open.spotify.com/user/0pw5iy6i1pegki0kiyzctz0ha?si=RYfOatVLS6q3S20hBZMqwA">

                        <p class="text-gray-800 font-medium">Spotipay</p>
                        <p class="text-sm text-gray-500">10/06/2023 01:56 PM</p>
                    </a>
                </div>
            </div>
            <div>
                <button class="text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Tambahkan item lainnya dengan format yang sama -->
        <!-- ... -->

    </div>
</div>

<script>
document.getElementById('renameButton').addEventListener('click', function() {
    const fileName = document.getElementById('fileName').value;

    if (fileName.trim() !== "") {
        // Logika untuk mengganti nama file
        console.log(`File renamed to: ${fileName}`);
        alert(`File renamed to: ${fileName}`);
    } else {
        alert("Please enter a valid file name.");
    }
});
</script>
@endsection