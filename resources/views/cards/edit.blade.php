<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            TODO編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" action="{{ route('cards.update', ['card' => $card->id])  }}">
                @method('PUT')
                @csrf
                    <div class="relative flex-grow w-1/3">
                        <label for="todoTitle" class="leading-7 text-sm text-gray-600">内容</label>
                        <input type="text" id="title" name="todoTitle" value="{{ $card->title }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>
                </form>
                <form method="post" action="{{ route('cards.destroy', ['card' => $card->id])  }}">
                    @method('DELETE')
                    @csrf
                    <button class="text-white bg-red-400 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">削除</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
