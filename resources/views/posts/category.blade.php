<x-app-layout>
    <div class="container py-8 ">
        <h2 class="uppercase text-center text-3xl font-bold my-3">Listado de Post por Categoria</h2>
        <hr>
        <h1 class="uppercase text-center text-3xl font-bold my-3"> {{$category->name}} </h1>

        @foreach($posts as $post)
        <article class="mb-8 bg-white shadow-lg rounded-lg mx-5 overflow-hidden">
            <img class="w-full h-72 object-cover object-center" src="{{$post->image->url}}" >
            <div class="px-6 py-4">
                <h2 class="font-bold text-xl mb-2">
                    <a href="{{route('posts.show',$post)}}">
                        {{$post->name}}
                    </a>
                </h2>
                <div class=" text-gray-700 text-base">
                    {{$post->extract}}
                </div>
                
            </div>
        </article>

        @endforeach

    </div>

</x-app-layout>