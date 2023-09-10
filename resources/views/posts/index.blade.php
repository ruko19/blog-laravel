<x-app-layout>

    <div class="px-2 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
        <div class="grid grid-cols-3 gap-6">
            @foreach ($posts as $post)

            <article class="w-full h-80 bg-cover bg-center  @if($loop->first) col-span-2 @endif " style="background-image: url({{Storage::url($post->image->url)}})">
                <div class="flex flex-col items-center justify-center w-full h-full px-8">


                    <div>
                        @foreach ($post->tags as $tag)
                        <a href="{{route('posts.tag', $tag)}}" class="inline-block h-6 px-3 text-white bg-gray-600 rounded-full">
                            {{$tag->name}}

                        </a>

                        @endforeach
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                    </h2>
                </div>
            </article>

            @endforeach

        </div>

    </div>




</x-app-layout>
