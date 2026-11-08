@extends('layouts.app', ['title' => 'Registrasi'])

@section('content')
<h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Daftar Akun Baru</h2>

<form method="POST" action="/register">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
        <input type="text" name="username" value="{{ old('username') }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('username') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('password') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg font-semibold hover:bg-blue-700">Daftar</button>
</form>

<p class="text-sm text-center text-gray-600 mt-4">Sudah punya akun? <a href="/login" class="text-blue-600 hover:underline">Login</a></p>
@endsection