
@extends('layouts.app')

@section('title', 'Ubah Kata Sandi')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-8">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

        <h1 class="text-2xl font-bold text-center mb-2">
            Ubah Password
        </h1>

        <p class="text-gray-500 text-center mb-6">
            Silakan masukkan password lama dan password baru.
        </p>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-medium mb-1">
                    Password Lama
                </label>
                <input type="password"
                       name="current_password"
                       class="w-full border rounded-lg px-3 py-2"
                       required>
                @error('current_password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">
                    Password Baru
                </label>
                <input type="password"
                       name="password"
                       class="w-full border rounded-lg px-3 py-2"
                       required>
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block font-medium mb-1">
                    Konfirmasi Password Baru
                </label>
                <input type="password"
                       name="password_confirmation"
                       class="w-full border rounded-lg px-3 py-2"
                       required>
            </div>

            <button type="submit"
                    class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded-lg">
                Simpan Password
            </button>

        </form>

    </div>
</div>
@endsection
