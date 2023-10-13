@extends('layouts.template_peternak')

@section('title', 'Dashboard Peternak')
@section('judul_konten','Dashboard Peternak')
@section('konten')
<div class="w-[1027px]">
    <div class="grid grid-cols-4 gap-4">
        {{-- card --}}
        <div class="bg-white rounded shadow p-3 w-[250px] border">
            <div class="grid grid-cols-2">
                <div class="w-[120px]">
                    <p class="text-lg font-medium">Data Ternak Sapi</p>
                    <hr class="my-2">
                    <p class="text-sm font-normal">
                        keterangan
                    </p>
                </div>
                <div class="ml-auto w-[80px]">
                    <img class="w-[70px]" src="../assets/img/sapi.png" alt="icon_sapi">
                </div>
            </div>
        </div>
        {{-- card --}}
        <div class="bg-white rounded shadow p-3 w-[250px] border">
            <div class="grid grid-cols-2">
                <div class="w-[120px]">
                    <p class="text-lg font-medium">Data Ternak Puyuh</p>
                    <hr class="my-2">
                    <p class="text-sm font-normal">
                        keterangan
                    </p>
                </div>
                <div class="ml-auto w-[80px]">
                    <img class="w-[70px]" src="../assets/img/puyuh.png" alt="icon_puyuh">
                </div>
            </div>
        </div>
        {{-- card --}}
        <div class="bg-white rounded shadow p-3 w-[250px] border">
            <div class="grid grid-cols-2">
                <div class="w-[120px]">
                    <p class="text-lg font-medium">Data Ternak Ayam</p>
                    <hr class="my-2">
                    <p class="text-sm font-normal">
                        keterangan
                    </p>
                </div>
                <div class="ml-auto w-[80px]">
                    <img class="w-[70px]" src="../assets/img/ayam.png" alt="icon_ayam">
                </div>
            </div>
        </div>
        {{-- card --}}
        <div class="bg-white rounded shadow p-3 w-[250px] border">
            <div class="grid grid-cols-2">
                <div class="w-[120px]">
                    <p class="text-lg font-medium">Data Ternak Kambing</p>
                    <hr class="my-2">
                    <p class="text-sm font-normal">
                        keterangan
                    </p>
                </div>
                <div class="ml-auto w-[80px]">
                    <img class="w-[70px]" src="../assets/img/kambing.png" alt="icon_kambing">
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-2 gap-4 mt-4">
        {{-- card --}}
        <div class="bg-white rounded shadow p-3 border">
            <div>
                <p class="text-lg font-bold">Data Silo Pakan Ternak</p>
                <hr class="my-2">
                <p class="text-sm font-normal">
                    keterangan
                </p>
            </div>
        </div>
        {{-- card --}}
        <div class="bg-white rounded shadow p-3 border">
            <div>
                <p class="text-lg font-bold">Stok Tipis</p>
                <hr class="my-2">
                <p class="text-sm font-normal">
                    keterangan
                </p>
            </div>
        </div>
    </div>
    
    {{-- table --}}
    <div class="mt-5">
        <div>
            <p class="text-[1.2em]">List Order</p>
        </div>
        <div class="relative overflow-x-auto mt-2 rounded shadow">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="font-semibold text-gray-900 uppercase bg-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk Pakan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
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
                            100 Karung
                        </td>
                        <td class="px-6 py-4">
                            Rp. 2.000.000
                        </td>
                        <td class="px-6 py-4">
                            Order
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection