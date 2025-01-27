<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <h3 class="text-xl">Welcome to my blog</h3>

    @foreach($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{$post['title']}}
            </h2>
            <div class="text-base text-gray-500">
                <a href="">{{$post['author']}}
                    </a> | 26 Januari 2025
                </div>
        <p class="my-4 font-light">{{Str::limit($post['body'],70 )}}</p>
        <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo </a>
    </article>
    @endforeach
    
</x-layout>