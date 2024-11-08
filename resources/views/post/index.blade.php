<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            post.index
        </h2>
    </x-slot>

    <div class="w-4/5 mx-auto py-10">

    @foreach($posts as $post)
        <div class="bg-white rounded-2xl mt-4">
            <h1 class="p-4 font-semibold">
                {{ $post->title }}
            </h1>
            <hr style="width:98%;" class="mx-auto">
            <p class="p-4">
                {{ $post->body }}
            </p>
        </div>
    @endforeach

    </div>

</x-app-layout>
