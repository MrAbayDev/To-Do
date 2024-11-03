@extends('layouts.app')
    <div class="min-h-screen flex items-center justify-center bg-gray-900 text-white">
        <div class="w-full max-w-md bg-gray-800 p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Kirish</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-300">Parol</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>

                <button type="submit" class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg">
                    Kirish
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-400">Hisobingiz yo'qmi? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-400">Ro'yxatdan o'tish</a></p>
            </div>
        </div>
    </div>
