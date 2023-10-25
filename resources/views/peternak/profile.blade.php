@extends('layouts.template_peternak')

@section('title', 'Profile')
@section('judul_konten','Profile')
@section('konten')
<div class="w-[1027px]">
    <div class="grid grid-cols-2">
        <div>
            <label for="name" class="text-gray-900 text-[1em]">Nama Peternak</label>
            <p class="text-[2em]">{{ $name }}</p>
        </div>
        <div>
            <label for="role" class="text-gray-900 text-[1em]">Role</label>
            <p class="text-[2em]">{{ $role }}</p>
        </div>
    </div>
    <hr class="my-5">
    <div>
        <label for="email" class="text-gray-900 text-[1em]">Email</label>
        <p class="text-[2em]">{{ $email }}</p>
    </div>
    <hr class="my-5">
    <div>
        <label for="alamat" class="text-gray-900 text-[1em]">Alamat</label>
        <p class="text-[2em]">{{ $alamat }}</p>
    </div>
    <div class="mt-10 back">
        <a href="{{ route('dashboard_peternak') }}">
            <button class="bg-red-600 border border-red-600 text-white p-1 rounded w-[100px] hover:bg-gray-100 hover:text-red-600 hover:border hover:border-red-600">Back</button>
        </a>
    </div>
</div>
@endsection