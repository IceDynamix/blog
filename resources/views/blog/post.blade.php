<x-blog-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
            <h2 class="grow">{{$post->title}}</h2>
            <p class="flex-none text-gray-300">{{$post->created_at}}</p>
        </div>
    </header>
    <div class="mt-6">
        {{$post->content}}
    </div>
</x-blog-layout>
