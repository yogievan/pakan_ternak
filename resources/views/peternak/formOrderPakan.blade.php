@extends('layouts.template_peternak')
@section('title', 'Form Order Pakan')
@section('judul_konten','Form Order Pakan')
@section('konten')
    <div class="w-[1027px]">
        <form action="#">
            <div>
                <label for="nama" class="text-gray-900 text-[1.1em]">Nama Pemesan</label><br>
                <input type="text" id="nama" class="w-full text-[1em] bg-gray-50 border border-gray-900 text-gray-900 rounded-lg p-3 outline-none" placeholder="nama" value="{{ $name }}" required>
            </div>
            <div class="my-5">
                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <label for="pakan" class="text-gray-900 text-[1.1em]">Merek Pakan</label><br>
                        <select name="" id="pakan" class="w-full text-[1em] bg-gray-50 border border-gray-900 text-gray-900 rounded-lg p-3 outline-none" required>
                            <option selected>Pilih Merek Pakan Ternak</option>
                            <option value="1">Pakan ternak 1</option>
                            <option value="2">Pakan ternak 2</option>
                            <option value="3">Pakan ternak 3</option>
                            <option value="4">Pakan ternak 4</option>
                        </select>
                    </div>
                    <div>
                        <label for="hargasatuan" class="text-gray-900 text-[1.1em]">Harga Satuan</label><br>
                        <p class="text-[32px] bg-transparent text-gray-900">Rp. ...</p>
                    </div>
                    <div>
                        <label for="qty" class="text-gray-900 text-[1.1em]">Quantity</label><br>
                        <input type="number" id="qty" class="w-full text-[1em] bg-gray-50 border border-gray-900 text-gray-900 rounded-lg p-3" placeholder="Per Karung" required>
                    </div>
                </div>
            </div>
            <div class="my-7">
                <label for="total_harga" class="text-gray-900 text-[1.1em]">Total Harga</label><br>
                <p class="text-[32px] bg-transparent text-gray-900 ">Rp. ...</p>
            </div>
            <div class="my-5">
                <button type="submit" class="bg-slate-900 text-white p-3 rounded w-[200px] hover:bg-slate-300 hover:text-gray-900 hover:border hover:border-gray-900">Order</button>
            </div>
        </form>
    </div>
@endsection