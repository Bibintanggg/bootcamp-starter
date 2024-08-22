@extends('layouts.main')

@section('section')
<h1 class="text-4xl font-bold text-center text-black/80">some page here</h1>
<div class="relative w-full max-w-xs bg-blue-500 p-6 rounded-lg shadow-lg">
    <!-- Time and Icons -->
    <div class="absolute top-3 left-4 text-white font-semibold">09:41</div>
    <div class="absolute top-3 right-4 flex items-center space-x-2 text-white">
        <div class="w-4 h-4 rounded-full bg-white"></div>
        <div class="w-4 h-4 border-2 border-white rounded-full"></div>
    </div>

    <!-- Login Form -->
    <h2 class="text-center text-white text-lg font-semibold mb-4">Login</h2>
    <form class="space-y-4">
        <div>
            <input class="w-full p-3 text-sm rounded-full bg-white placeholder-gray-400 focus:outline-none" type="email"
                placeholder="Email">
        </div>
        <div>
            <input class="w-full p-3 text-sm rounded-full bg-white placeholder-gray-400 focus:outline-none"
                type="password" placeholder="Password">
        </div>
        <button class="w-full p-3 text-sm text-white bg-blue-700 rounded-full hover:bg-blue-600">Sign In</button>
    </form>

    <!-- Or Divider -->
    <div class="flex items-center my-4">
        <hr class="flex-1 border-t border-white">
        <span class="mx-2 text-white text-sm">Or</span>
        <hr class="flex-1 border-t border-white">
    </div>

    <!-- Social Login -->
    <div class="flex justify-center space-x-4 mb-4">
        <button class="w-10 h-10 flex items-center justify-center bg-white rounded-full">
            <img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google" class="w-6 h-6">
        </button>
        <button class="w-10 h-10 flex items-center justify-center bg-white rounded-full">
            <img src="https://img.icons8.com/color/48/000000/facebook.png" alt="Facebook" class="w-6 h-6">
        </button>
    </div>

    <!-- Forgot Password and Sign Up -->
    <div class="text-center">
        <a href="#" class="text-white text-sm underline">Forgot Password?</a>
    </div>
    <div class="text-center mt-4">
        <button class="w-full p-3 text-sm text-white bg-blue-700 rounded-full hover:bg-blue-600">Sign Up</button>
           
    </div>
</div>
@endsection