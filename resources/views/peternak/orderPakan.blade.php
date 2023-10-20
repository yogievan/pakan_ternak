@extends('layouts.template_peternak')
@section('title', 'Order Pakan')
@section('judul_konten','Order Pakan')
@section('konten')
    <div class="w-[1027px]">
        @foreach ($pakans as $item)
            <div class="bg-white shadow border rounded w-full mb-3 p-3">
                <div class="list-pakan">
                    <div class="w-[200px]">
                        <img class="pakan-img rounded" src="../assets/img/pakan.jpg" alt="">
                    </div>
                    <div class="w-[600px] p-2">
                        <p class="text-gray-900 text-[1.2em] font-semibold">{{ $item -> nama_pakan }}</p>
                        <p class="text-gray-900 text-[1em] font-normal">RP. {{ $item -> harga }}</p>
                        <p class="text-gray-900 text-[1em] font-normal">Berat :{{ $item -> berat_kg }} Kg</p>
                    </div>
                    <div class="w-[200px] m-auto">
                        <a href="/order/pakan-{{ $item -> id }}">
                            <button type="submit" class="bg-slate-900 text-white p-3 rounded w-[200px] hover:bg-slate-400 hover:text-gray-900 hover:border hover:border-gray-900">Order</button>
                        </a>
                        <p class="text-[14px] text-red-600">Stock Pabrik : optional</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection