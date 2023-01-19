<x-app-layout>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 ">
        <div class="gri grid-cols-3 gap-6 p-4">
            @foreach($posts as $post)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) col-span-2 @endif m-5" style="background-image: url({{($post->image->url)}})">
                <div class="w-full h-full px-8 flex flex-col justify-center ">
                    <h1 class="text-4xl text-white leading-8 font-bolt">
                        <div>
                            @foreach ($post->tags as $tag)
                            <a href="{{route('posts.show',$post) }}"> {{$tag->name}} </a>
                            @endforeach

                        </div>
                        <a href="/posts/{{$post->id}}">
                            {{$post->name}}
                        </a>
                        <h1>
                </div>

            </article>

            @endforeach
        </div>
        <div class="mt-4 py-4">
            {{$posts->links()}}
        </div>
    </div>

</x-app-layout>