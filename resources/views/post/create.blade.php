<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            post.create
        </h2>
    </x-slot>

    <div class="w-4/5 mx-auto py-10">

    @if(session('message'))
        <div class="text-red-600 font-bold">
            {{ session('message') }}
        </div>
    @endif

        <form method="post" action="{{ route('post.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="title">件名</label>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <input type="text" name="title" id="title" value="{{ old('title') }}">
            </div>

            <div>
                <label for="body">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" id="body">{{ old('body') }}</textarea>
            </div>

            <x-primary-button class="bg-lime-700">
                送信する
            </x-primary-button>
            
        </form>

    </div>

</x-app-layout>
