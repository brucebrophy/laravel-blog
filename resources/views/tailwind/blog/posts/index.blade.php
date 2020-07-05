@extends('vendor.laravel-blog.blog.layout')

@section('content')
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($posts as $post)
                <div class="w-full lg:max-w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1591892234230-dc80bfe2ee31?ixlib=rb-1.2.1&auto=format&fit=crop&w=913&q=80')" title="Woman holding a mug">
                    </div>
                    <div class="w-full border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="text-gray-900 font-bold text-xl mb-2">{{ $post->title }}</div>
                            <p class="text-gray-700 text-base">{{ $post->body }}</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="https://api.adorable.io/avatars/100/abdddott@adorable.io.png" alt="Avatar of Jonathan Reinink">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                <p class="text-gray-600">{{ $post->created_at->format('M. j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-6">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
@endsection