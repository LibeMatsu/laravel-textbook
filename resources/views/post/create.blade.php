<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            post.create
        </h2>
    </x-slot>

    <div class="w-4/5 mx-auto py-10">

        <form method="post" action="{{ route('post.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="title">件名</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="body">本文</label>
                <textarea name="body" id="body"></textarea>
            </div>

            <x-primary-button class="bg-lime-700">
                送信する
            </x-primary-button>
            
        </form>

    </div>

</x-app-layout>
