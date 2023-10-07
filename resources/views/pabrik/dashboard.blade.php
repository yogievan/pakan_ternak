@extends('layouts.template_pabrik')

@section('title', 'Dashboard Pabrik')
@section('judul_konten','Dashboard Pabrik')
@section('konten')
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
@endsection