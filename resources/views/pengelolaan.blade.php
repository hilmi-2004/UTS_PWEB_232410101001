@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg p-6 mt-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-yellow-700">📦 Data Produk Burger King</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-yellow-900 border border-yellow-300 rounded">
                <thead class="bg-yellow-100 text-yellow-800 uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3 border">ID</th>
                        <th class="px-4 py-3 border">Nama Produk</th>
                        <th class="px-4 py-3 border text-center">Stok</th>
                        <th class="px-4 py-3 border">Harga (Rp)</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-yellow-200">
                    @forelse ($dataProduk as $produk)
                        <tr class="hover:bg-yellow-50 transition">
                            <td class="px-4 py-2 border">{{ $produk['id'] }}</td>
                            <td class="px-4 py-2 border font-medium">{{ $produk['nama'] }}</td>
                            <td class="px-4 py-2 border text-center">{{ $produk['stok'] }}</td>
                            <td class="px-4 py-2 border">Rp {{ number_format($produk['harga'], 0, ',', '.') }}</td> 
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-gray-500 py-4">Tidak ada data produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
