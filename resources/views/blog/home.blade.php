<x-blog-layout>
    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
    {{$posts->links()}}
</x-blog-layout>
