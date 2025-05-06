@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-yellow-100 to-yellow-300 py-10 px-6 sm:px-8 md:px-12 flex justify-center items-start">
    <div class="w-full h-full flex flex-col space-y-10 mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-yellow-700">👋 Selamat Datang, {{ $username }}!</h1>
            </div>
            <img src="{{ asset('images/logobg.png') }}" alt="Logo Warung" class="h-16 mt-4 md:mt-0">
        </div>

        <div>
            <h2 class="text-2xl font-bold text-yellow-700 mb-4">Produk Unggulan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 sm:px-6">
                @foreach ($produk as $item)
                    <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-4">
                        <img src="{{ asset('images/' . $item['gambar']) }}" 
                             alt="{{ $item['nama'] }}" class="h-32 mx-auto mb-4 object-contain w-full">
                        <h3 class="text-lg font-semibold text-yellow-700 text-center">{{ $item['nama'] }}</h3>
                        <p class="text-sm text-yellow-600 text-center">Rp{{ number_format($item['harga'], 0, ',', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center pt-6">
            <a href="{{ route('pengelolaan') }}"
               class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:from-yellow-500 hover:to-yellow-700 transition-all">
                🛒 Kelola Barang
            </a>
        </div>
    </div>
</div>
@endsection
