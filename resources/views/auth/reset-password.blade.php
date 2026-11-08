@extends('layouts.app', ['title' => 'Reset Password'])

@section('content')
<h2 class="text-xl font-bold mb-4 text-center text-gray-800">Buat Password Baru</h2>

<form method="POST" action="/reset-password">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
        <input type="email" name="email" value="{{ old('email', $request->email) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required readonly>
        @error('email') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Password Baru</label>
        <input type="password" name="password" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        @error('password') <span class="text-red-500 text-xs block mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg font-semibold hover:bg-blue-700">Simpan Password Baru</button>
</form>
@endsection