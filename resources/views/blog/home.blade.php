<x-blog-layout>
    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
</x-blog-layout>
