<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            post.show
        </h2>
    </x-slot>

    <div class="w-4/5 mx-auto py-10">

    <!-- @if(session('message'))
        <div class="text-red-600 font-bold">
            {{ session('message') }}
        </div>
    @endif -->

    <x-message :message="session('message')" />

    <div class="bg-white rounded-2xl mt-4 ">
        <div class="relative h-16">
            <h1 class="p-4 font-semibold">
                {{ $post->title }}
            </h1>
            <div class="absolute top-5 right-5 flex flex-reverse">
                <a href="{{ route('post.edit', $post) }}">
                    <x-primary-button class="bg-cyan-500 hover:bg-cyan-800 active:bg-cyan-300">
                        編集
                    </x-primary-button>
                </a>

                <form method="post" action="{{ route('post.destroy', $post) }}" class="ml-2">
                    @csrf
                    @method('delete')
                    <x-primary-button class="bg-red-700 hover:bg-red-500 active:bg-red-300">
                        削除
                    </x-primary-button>
                </form>
            </div>
        </div>
        <hr style="width:98%;" class="mx-auto">
        <p class="p-4 whitespace-pre-line">
            {!! nl2br(e($post->body)) !!}
        </p>
        <p class="p-4 text-sm flex flex-row-reverse">
            {{ $post->created_at }}
        </p>
    </div>

    </div>

</x-app-layout>
