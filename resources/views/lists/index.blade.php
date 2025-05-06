<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
        <h2 class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</h2>
        </div>
        <div class="flex flex-wrap -m-4">
            @foreach ($task_lists as $list)
                <div class="p-4 lg:w-1/4 sm:w-1/2 w-full bg-white mx-4">
                    <h3 class="text-xl font-bold mb-2">{{ $list->title }}（カテゴリー: {{ $list->category }}）</h3>
                    <ul class="flex flex-col sm:items-start sm:text-left text-center -mb-1 space-y-2.5">
                    @if ($list->task_cards->isEmpty())
                    <p class="p-4 text-gray-500">ToDoはまだ登録されていません。</p>
                    @else
                    @foreach ($list->task_cards as $card)
                    <li class="w-full">
                    <a href="{{ route('cards.edit', ['card' => $card->id]) }}" class="w-full p-4 block bg-gray-100 hover:bg-gray-300">
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        </span>{{ $card->title }}
                    </a>
                    </li>
                    @endforeach   
                    @endif

                    </ul>
                </div>
            @endforeach

        </div>
        <div class="grid grid-cols-4 gap-4 mt-16 text-white">
            <button onclick="location.href='{{ route('lists.create') }}'" class="bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">リスト登録</button>
            <button onclick="location.href='{{ route('cards.create') }}'" class="bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">TODO登録</button>
        </div>
    </div>
</section>

</x-app-layout>