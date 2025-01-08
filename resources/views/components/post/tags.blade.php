@props(['tags'])

<div class="flex gap-2 align-bottom mb-6 ">
    @foreach ($tags as $tag)
        <a href="/tags/{{str()->slug($tag->name)}}"
            class="bg-blue-400 text-white text-xs px-2 py-1 rounded-full hover:bg-blue-600">{{$tag->name}}</a>
    @endforeach
</div>