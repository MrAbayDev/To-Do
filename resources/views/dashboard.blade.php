@extends('layouts.app')

<body class="bg-gray-100 h-screen">
<div class="flex h-screen">
    <div class="w-1/4 bg-blue-500 text-white p-6">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Home</a></li>
                <li><a href="{{ route('tasks.index') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Tasks</a></li>
            </ul>
        </nav>
    </div>
    <div class="w-3/4 p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to your Dashboard!</h1>
        <p class="text-gray-600">This is your dashboard where you can view and manage your tasks and other data.</p>

        <!-- Embed tasks.index view here -->
        <div class="grid grid-cols-3 gap-4 mt-6">
            @include('tasks.index')
        </div>
    </div>
</div>
</body>
