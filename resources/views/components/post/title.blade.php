@props(['title'])

@if (str()->of($title)->length() > 30)
    <h2 class="text-gray-800  text-2xl font-bold font-sans hover:underline mt-3">{{str()->of($title)->substr(0, 30)}}...</h2>
    
@else
<h2 class="text-gray-800  text-2xl font-bold font-sans hover:underline mt-3">{{$title}}</h2>
    
@endif


