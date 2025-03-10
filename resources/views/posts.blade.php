<x-layout>
    {{-- nanti akan digunakan di dalam layout ($title) --}}
    <x-slot:title>{{ $title }}</x-slot>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">

            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
                </h2>
            </a>


            <div class="text-base text-gray-500 mt-2 ">

                <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>

            <p class="my-4 font-light">{{ Str::limit($post['body'], 55) }}</p>

            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 font-medium hover:underline">Read More &raquo;</a>

        </article>
    @endforeach

</x-layout>
