<x-app-layout>
    <div class="px-8">
<div class="container py-8">
<h1 class="text-4xl font-bold text-gray-600">
    {{$post->name}} 
</h1>
<div class="text-lg text-gray-500 mb-2">
    {{$post->extract}} 
</div>
{{-- contenido principla --}}
<div class="col-span-2 gap-6">
<figure>
    <img class=" h-80 object-cover object-center" src="{{($post->image->url)}}" >
</figure>
<div class="text-base text-gray-500 mt-4">
    {{($post->body)}}
</div>


</div>

{{-- contenido relacionado --}}
<aside>
<h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{($post->category->name)}}</h1>
<ul>
    @foreach($similares as $similar)
    <li>
        <a class="flex" href="{{route('posts.show',$similar)}}">
        <img class="w-36 h-20 object-cover object-center py-2" src="{{($similar->image->url)}}" alt="">
        <span class="ml-2 text-gray-600" >{{$similar->name}} </span>
    </a>
    </li>
    @endforeach
</ul>
</aside>
</div>
</div>
</x-app-layout>