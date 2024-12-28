@props(['post', 'randomimage'])
<x-post.tags :tags="$post->tags" />
    <div >
        <a href="post/{{$post->slug}}" class="text-gray-800 hover:text-blue-600">  
            <x-post.image :randomimage="$randomimage" />
            <x-post.title>{{$post->title}}</x-post.title>
        </a>
        <p class="text-gray-800 text-sm font-sans mt-3">{{$post->created_at->diffForHumans()}}</p>
    </div>
    <x-post.text>{{str()->of($post->content)->substr(0, 300)}}</x-post.text>
    