<x-layout>
    {{-- nanti akan digunakan di dalam layout ($title) --}}
    <x-slot:title>{{ $title }}</x-slot>
    
    <article class="py-8 max-w-screen-md border-b border-gray-300 mx-auto">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <div class="text-base text-gray-500 mt-2 hover:underline">

         by   <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in
         <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </div>

        <p class="my-4 font-light">{{ $post['body'], 55 }}</p>

        <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Back to Posts</a>

    </article>
    
    
</x-layout>
