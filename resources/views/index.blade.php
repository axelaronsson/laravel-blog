@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Laravel Blog
                </h1>
                <a 
                    href="/register"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Join
                </a>
            </div>
        </div>
    </div>


    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

    </div>

    @foreach ($posts as $post)
    @if ($loop->index >= 2)
        @break
    @endif
    <div class="w-2/5 m-auto mt-2">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    {{ $post->title}}
                </span>

                <h3 class="text-xl font-bold py-10">
                    {{ $post->description}}
                </h3>

                <a 
                    href=<?php echo "/blog" . "/" . $post->slug; ?>
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Go to article
                </a>
            </div>
        </div>
    </div>
    @endforeach
@endsection