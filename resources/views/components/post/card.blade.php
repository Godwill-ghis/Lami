@props(['post', 'randomimage', 'randomProfile'])
<x-post.tags :tags="$post->tags" />
    <div >
        <a href="posts/{{$post->slug}}" class="text-gray-800 hover:text-blue-600">  
            <x-post.image :randomimage="$randomimage" />
            <x-post.title :title="$post->title" />
        </a>
        <div class="flex items-center justify-between">
            <a href="/users/{{$post->user->name}}" class="flex items-center gap-2 mt-3">
                <img src="{{asset('images/' . $randomProfile)}}" alt="avatar" class="w-10 h-10 rounded-full">
                <p class="text-blue-400 text-sm">{{$post->user->name}}</p>
            </a>
            <p class="text-gray-800 text-sm font-sans mt-3">{{$post->created_at->diffForHumans()}}</p>
            
        </div>
    </div>
    <x-post.text>{{str()->of($post->content)->substr(0, 300)}}</x-post.text>
    