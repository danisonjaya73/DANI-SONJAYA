@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<h2 class="text-2xl font-bold mb-4 text-gray-800">Selamat Datang, {{ Auth::user()->name }}!</h2>
<p class="text-gray-600 mb-2">Username: <span class="font-semibold">{{ Auth::user()->username }}</span></p>
<p class="text-gray-600 mb-6">Email: <span class="font-semibold">{{ Auth::user()->email }}</span></p>

<form method="POST" action="/logout">
    @csrf
    <button type="submit" class="w-full bg-red-600 text-white p-2 rounded-lg font-semibold hover:bg-red-700">Logout</button>
</form>
@endsection