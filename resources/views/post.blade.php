<x-layout>
    {{-- nanti akan digunakan di dalam layout ($title) --}}
    <x-slot:title>{{ $title }}</x-slot>
    
    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300 mx-auto">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <div class="text-base text-gray-500 mt-2 hover:underline">

         by   <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in
         <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </div>

        <p class="my-4 font-light">{{ $post['body'], 55 }}</p>

        <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Back to Posts</a>

    </article> --}}


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-xs text-blue-600 hover:underline mb-2">&laquo; Back to All Posts</a>
                    
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"> {{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
                </header>
                <p class="lead">{{ $post->body }}</p>
                
            </article>
        </div>
    </main>
</x-layout>
