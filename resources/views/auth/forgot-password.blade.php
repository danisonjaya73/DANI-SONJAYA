@extends('layouts.app', ['title' => 'Lupa Password'])

@section('content')
<h2 class="text-xl font-bold mb-4 text-center text-gray-800">Minta Link Reset Password</h2>

@if (session('status'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg text-sm">{{ session('status') }}</div>
@endif

<form method="POST" action="/forgot-password">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Email Terdaftar</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('email') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg font-semibold hover:bg-blue-700">Kirim Link Reset</button>
</form>

<p class="text-sm text-center text-gray-600 mt-4"><a href="/login" class="text-blue-600 hover:underline">Kembali ke Login</a></p>
@endsection