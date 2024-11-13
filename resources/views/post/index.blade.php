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
                件名：
                <a href="{{ route('post.show', $post) }}" class="text-blue-600">
                    {{ $post->title }}
                </a>
            </h1>
            <hr style="width:98%;" class="mx-auto">
            <p class="p-4">
                {{ Str::limit($post->body, 100) }}
            </p>
            <p class="p-4">
                <!-- デフォルト値を入れておくと値がnullだった時のエラーを回避できる -->
                {{ $post->created_at }} / {{ $post->user->name??'匿名' }}
            </p>
        </div>
    @endforeach

    </div>

</x-app-layout>
