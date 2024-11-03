<div class="container mx-auto p-4">
    <!-- Task Creation Form -->
    <form method="POST" action="{{ route('tasks.store') }}" class="mb-4 space-y-4">
        @csrf
        <input type="text" name="title" placeholder="Vazifa nomi..." required
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        <textarea name="description" placeholder="Vazifa tavsifi..." rows="3"
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300"></textarea>
        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Qo'shish</button>
    </form>

    <!-- Tasks List -->
    <ul>
        @foreach ($tasks as $task)
            <li class="flex flex-col bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 mb-2">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-gray-700">{{ $task->title }}</span>
                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="ml-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">O'chirish</button>
                    </form>
                </div>
                <p class="text-gray-600 mt-1">{{ $task->description }}</p>
            </li>
        @endforeach
    </ul>
</div>
