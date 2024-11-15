<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            post.edit
        </h2>
    </x-slot>

    <div class="w-4/5 mx-auto py-10">

    <!-- @if(session('message'))
        <div class="text-red-600 font-bold">
            {{ session('message') }}
        </div>
    @endif -->

    <x-message :message="session('message')" />


        <form method="post" action="{{ route('post.update',$post) }}" class="space-y-5">
            @csrf

            <!-- patchメソッドを指定。（formではとりあえず method="post" にしておく） -->
            @method('patch')

            <div>
                <label for="title" class="block">件名</label>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <!-- value=デフォルトではデータベースの値を表示、バリデーションエラーが起こった時はエラー前の値を返す -->
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="w-1/2">
            </div>

            <div>
                <label for="body">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" id="body" class="h-full min-h-[200px] w-full">{{ old('body', $post->body) }}</textarea>
            </div>

            <x-primary-button class="bg-lime-700 hover:bg-lime-900 active:bg-lime-300">
                送信する
            </x-primary-button>
            
        </form>
    
    </div>

</x-app-layout>
