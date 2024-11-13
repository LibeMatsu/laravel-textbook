<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            post.show
        </h2>
    </x-slot>

    <div class="w-4/5 mx-auto py-10">

    <div class="bg-white rounded-2xl mt-4 ">
        <div class="relative h-16">
            <h1 class="p-4 font-semibold">
                {{ $post->title }}
            </h1>
            <div class="absolute top-5 right-5">
                <a href="{{ route('post.edit', $post) }}">
                    <x-primary-button class="bg-cyan-500 hover:bg-cyan-800 active:bg-cyan-300">
                        編集
                    </x-primary-button>
                </a>
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
