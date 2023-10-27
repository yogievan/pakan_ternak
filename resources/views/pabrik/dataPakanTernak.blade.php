@extends('layouts.template_pabrik')
@section('title', 'Data Pakan Ternak')
@section('judul_konten','Data Pakan Ternak')
@section('konten')
    <div class="w-[1027px]">
        <a href="{{ route('addPakan') }}">
            <button class="bg-gray-900 rounded shadow p-3 mb-3 border border-gray-900 text-white hover:bg-slate-100 hover:text-gray-900">Tambah Stock</button>
        </a>
        <div class="relative overflow-x-auto mt-3 rounded shadow">
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
                    {{-- loop data --}}
                    @foreach ($pakans as $item)
                    <tr class="bg-gray-900 text-white border border-b">
                        <td class="px-6 py-4">
                            {{ $item -> id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item -> nama_pakan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item -> jenis_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item -> berat_kg }} KG
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection