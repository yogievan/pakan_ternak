@extends('layouts.template_peternak')
@section('title', 'Form Order Pakan')
@section('judul_konten','Form Order Pakan')
@section('konten')
{{-- blm ada atribut name --}}
    <div class="w-[1027px]">
        <div class="mb-5 back">
            <a href="/order/pakan">
                <button class="bg-red-600 border border-red-600 text-white p-1 rounded w-[100px] hover:bg-gray-100 hover:text-red-600 hover:border hover:border-red-600">Back</button>
            </a>
        </div>
        <form action="#" method="post">
            @csrf
            @method('Put')
            <div class="mb-3">
                <label for="nama" class="text-gray-900 text-[1.1em]">Nama Pemesan</label><br>
                <input type="text" id="nama" class="w-full text-[1em] bg-gray-50 border border-gray-900 text-gray-900 rounded-lg p-3 outline-none" placeholder="nama" value="{{ $name }}" required>
                <input type="text" value="{{ $id_user }}"hidden>
            </div>
            <div class="mb-3">
                <label for="qty" class="text-gray-900 text-[1.1em]">Produk Pakan</label><br>
                <p class="text-[2em]">{{ $pakans -> nama_pakan }}</p>
                <input type="text" value="{{ $pakans -> nama_pakan }}" hidden>
            </div>
            <div class="grid grid-cols-2 mb-3">
                <div>
                    <label for="qty" class="text-gray-900 text-[1.1em]">Harga / Karung</label><br>
                    <p class="text-[2em]">Rp. {{ $pakans -> harga }}</p>
                    <input type="text" value="{{ $pakans -> harga }}" hidden>
                </div>
                <div>
                    <label for="qty" class="text-gray-900 text-[1.1em]">Berat / Karung</label><br>
                    <p class="text-[2em]">{{ $pakans -> berat_kg }} KG</p>
                    <input type="text" value="{{ $pakans -> berat_kg }}" hidden>
                </div>
            </div>
            <div class="mb-3">
                <label for="qty" class="text-gray-900 text-[1.1em]">Order dalam Jumlah Karung</label><br>
                <input type="number" id="qty" class="w-[30%] text-[1em] bg-gray-50 border border-gray-900 text-gray-900 rounded-lg p-3 outline-none" placeholder="Nominal" required>
                <p class="text-[14px] text-red-600">Stock Pabrik : optional</p>
            </div>
            <div class="d-flex gap-4">
                <button type="submit" class="bg-slate-900 text-white p-3 rounded w-[200px] hover:bg-slate-400 hover:text-gray-900 hover:border hover:border-gray-900">Order</button>
            </div>
        </form>
    </div>
@endsection