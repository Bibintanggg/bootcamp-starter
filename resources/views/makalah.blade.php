@extends('layouts.main')

@section('section')

<div class="p-6 mx-auto">
    <!-- bagian my folerd > doc > makalalh -->
    <div class="flex items-center text-gray-500  mb-4">
        <span class="text-gray-700 font-semibold">My Folder</span>
        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>

        <a href="/docs">
            <span class="text-gray-700 font-semibold">Document</span>
        </a>
        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>

        <span class="text-blue-500 font-semibold">Tugas Makalah</span>
    </div>

    <!-- Icon Folder dan File -->
    <div class="grid grid-cols-4 gap-4">

        <!-- Bagian Folder Items -->
        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/folder.svg') }}" />
            </div>
            <span class="text-sm font-medium text-gray-700">Folder Bintang</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/folder.svg') }}" />
            </div>
            <span class="text-sm font-medium text-gray-700">Folder Rizqi</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/folder.svg') }}" />
            </div>
            <span class="text-sm font-medium text-gray-700">Laravel1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/folder.svg') }}" />
            </div>
            <span class="text-sm font-medium text-gray-700">Belajar VSCode</span>
        </div>

        <!-- File Items -->
        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <div class="text-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto mb-2">
                <img src="{{ asset('/images/document.svg') }}" class="w-16" />
            </div>
            <span class="text-sm font-medium text-gray-700">File name 1</span>
        </div>

        <!-- Duplicate the file items as necessary -->
        <!-- End -->
    </div>
</div>


@endsection