@extends('layouts.template_peternak')
@section('title', 'Stok Pakan Ternak')
@section('judul_konten','Stok Pakan Ternak')
@section('konten')
    <div class="w-[1027px]">
        <a href="#tambahStockPkan">
            <button class="bg-gray-900 rounded shadow p-3 mb-3 border border-gray-900 text-white hover:bg-slate-100 hover:text-gray-900">Tambah Stock</button>
        </a>
        <div class="relative overflow-x-auto mt-2 rounded shadow">
            <div class="text-[20px] font-normal">Histori Pakan Masuk</div>
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="font-semibold text-gray-900 uppercase bg-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk Pakan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Pakan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-900 text-white">
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            Pakan 1
                        </td>
                        <td class="px-6 py-4">
                            Ayam
                        </td>
                        <td class="px-6 py-4">
                            100 Karung
                        </td>
                        <td class="px-6 py-4">
                            <a href="#edit">
                                <button class="bg-green-600 p-2 rounded text-white w-[70px] hover:bg-green-400">Edit</button>
                            </a>
                            <a href="#delete">
                                <button class="bg-red-600 p-2 rounded text-white w-[70px] hover:bg-red-400">Hapus</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection