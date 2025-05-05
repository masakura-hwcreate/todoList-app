<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('cards.store') }}">
                @csrf
                    <div class="p-6 text-gray-900">
                        <div class="p-2">
                            <label for="category">カテゴリー</label>
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                            
                        <div class="p-2">
                            <label for="todoTitle">todoタイトル</label>
                            <input type="text" id="todoTitle" name="todoTitle">
                        </div>
                    </div>
                    <button type="submit">登録</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
