@extends('layouts.template_pabrik')
@section('title', 'Tambah Data Pakan Ternak')
@section('judul_konten','Tambah Data Pakan Ternak')
@section('konten')
    <div class="w-[1027px]">
        <form action="/pakan/ternak/tambah/data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="qty" class="text-gray-900 text-[1.1em]">Nama Pakan Ternak</label>
                <input type="text" name="nama_pakan" class="w-full text-[1em] bg-gray-50 border border-gray-900 text-gray-900 rounded-lg p-3 outline-none" placeholder="Nama Produk" required>
            </div>
            <div class="mb-3">
                <label for="qty" class="text-gray-900 text-[1.1em]">Harga satuan</label>     
                <div class="flex border border-gray-900" style="border-radius: 8px">
                    <span class="inline-flex items-center px-5 text-sm text-gray-900 bg-gray-200" style="border-radius: 8px 0px 0px 8px; border: none">
                        <p class="text-gray-500">Rp. </p>
                    </span>
                    <input type="number" name="harga" class="w-full text-[1em] bg-gray-50  text-gray-900 p-3" style="border-radius: 0px 8px 8px 0px; border: none" placeholder="Nominal" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="qty" class="text-gray-900 text-[1.1em]">Berat satuan</label>
                <div class="flex gap-2">
                    <input type="number" name="berat_kg" class="w-full text-[1em] bg-gray-50  text-gray-900 p-3 rounded-lg" placeholder="Nominal/Kg" required>
                    <p class="text-gray-900 text-[1.9em]" style="align-items: center; justify-content: center">Kg</p>
                </div>
            </div>
            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Pakan</label>
                <select name="jenis_id" class="bg-gray-50 border border-gray-900 text-gray-900 text-[1em] rounded-lg w-full">
                    <option selected>Pilih Jenis Pakan</option>
                    @foreach ($jenis as $item)
                    <option value="{{ $item -> id }}">{{ $item -> jenis }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="bg-gray-900 rounded shadow p-3 mb-3 border border-gray-900 text-white hover:bg-slate-100 hover:text-gray-900">Submit</button>
            </div>
        </form>
    </div>
@endsection