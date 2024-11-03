<!-- resources/views/users/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Foydalanuvchini Tahrirlash</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-700">Ism</label>
                <input type="text" name="name" value="{{ $user->name }}" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div>
                <label class="block text-gray-700">Yangi Parol (majburiy emas)</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded">
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">O'zgartirish</button>
        </form>
    </div>
@endsection
