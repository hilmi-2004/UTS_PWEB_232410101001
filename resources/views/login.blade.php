@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-yellow-100 to-yellow-300 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-2xl border border-yellow-200">

        <h2 class="text-3xl font-bold text-center text-yellow-600 mb-2">SELAMAT DATANG DI BURGER KING</h2>
        <p class="text-center text-yellow-700 mb-6 text-sm">Silakan login terlebih dahulu</p>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm border border-red-300">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-yellow-700 font-medium mb-1">Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5.121 17.804A4 4 0 017.757 17h8.486a4 4 0 012.636.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </span>
                    <input type="text" name="username" required
                           class="w-full pl-10 px-4 py-2 border border-yellow-300 rounded-lg bg-yellow-50 placeholder-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </div>

            <div>
                <label class="block text-yellow-700 font-medium mb-1">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c.556 0 1 .444 1 1v2a1 1 0 01-2 0v-2c0-.556.444-1 1-1zm0-7a4 4 0 014 4v3H8V8a4 4 0 014-4z"/>
                        </svg>
                    </span>
                    <input type="password" name="password" required
                           class="w-full pl-10 px-4 py-2 border border-yellow-300 rounded-lg bg-yellow-50 placeholder-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </div>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 text-white font-semibold py-2 rounded-lg hover:from-yellow-500 hover:to-yellow-700 transition duration-300 shadow-md hover:scale-105">
                Login
            </button>
        </form>
    </div>
</div>
@endsection
