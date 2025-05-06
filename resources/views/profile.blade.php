@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white shadow-lg rounded-xl p-8 border border-yellow-300">
        <div class="flex items-center space-x-6 mb-6">
            <img src="https://ui-avatars.com/api/?name={{ $username }}&background=FFCB05&color=000" 
                 alt="Avatar" 
                 class="w-20 h-20 rounded-full border-2 border-yellow-500 shadow">
            <div>
                <h2 class="text-3xl font-bold text-yellow-800 mb-1">Profil Admin</h2>
                <p class="text-gray-600 text-lg">Selamat datang, <span class="font-semibold text-gray-900">{{ $nama }}</span></p>
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <label class="text-gray-600 font-semibold">Username:</label>
                <div class="text-lg text-gray-800">{{ $username }}</div>
            </div>
            <div>
                <label class="text-gray-600 font-semibold">Nomor Telepon:</label>
                <div class="text-lg text-gray-800">{{ $telepon }}</div>
            </div>
            <div>
                <label class="text-gray-600 font-semibold">Alamat:</label>
                <div class="text-lg text-gray-800">{{ $alamat }}</div>
            </div>
            <div>
                <label class="text-gray-600 font-semibold">Password:</label>
                <div class="text-lg text-gray-800">••••••••</div>
            </div>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="/dashboard" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition shadow">
                Kembali ke Dashboard
            </a>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition shadow">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
