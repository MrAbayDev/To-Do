<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $user->name }} haqida ma'lumot</h1>

        <div class="bg-white p-4 rounded shadow-md">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Ism:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <a href="{{ route('users.index') }}" class="mt-4 inline-block px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Orqaga</a>
        </div>
    </div>
@endsection
