<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <ul class="p-6 text-gray-900">
                    @foreach ($task_lists as $task_list)
                        <li>
                            <span>{{ $task_list->title }}</span>
                            <span>{{ $task_list->category }}</span>
                        </li>
                    @endforeach
                </ul> --}}
                @foreach ($task_lists as $list)
                    <div class="mb-6 p-4 border rounded">
                        <h2 class="text-xl font-bold mb-2">
                            {{ $list->title }}（カテゴリー: {{ $list->category }}）
                        </h2>

                        @if ($list->task_cards->isEmpty())
                            <p class="text-gray-500">ToDoはまだ登録されていません。</p>
                        @else
                            <ul class="list-disc pl-5">
                                @foreach ($list->task_cards as $card)
                                    <li class="py-1">{{ $card->title }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
