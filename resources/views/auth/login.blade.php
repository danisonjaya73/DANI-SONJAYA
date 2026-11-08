@extends('layouts.app', ['title' => 'Login'])

@section('content')
<h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Masuk Aplikasi</h2>

@if (session('status'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg text-sm">{{ session('status') }}</div>
@endif

<form method="POST" action="/login">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Email atau Username</label>
        <input type="text" name="login" value="{{ old('login') }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('login') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="flex items-center justify-between mb-6">
        <label class="inline-flex items-center text-sm text-gray-600">
            <input type="checkbox" name="remember" class="rounded border-gray-300">
            <span class="ml-2">Ingat Saya</span>
        </label>
        <a href="/forgot-password" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg font-semibold hover:bg-blue-700">Masuk</button>
</form>

<p class="text-sm text-center text-gray-600 mt-4">Belum punya akun? <a href="/register" class="text-blue-600 hover:underline">Daftar</a></p>
@endsection