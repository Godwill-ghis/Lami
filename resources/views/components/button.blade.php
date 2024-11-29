@props(['type' => 'link', 'uri' => '#'])

@if ($type === 'link')
<a href={{$uri}} {{ $attributes->merge(['class' => 'px-6 py-2 rounded'])}}>{{$slot}}</a>
@else
<button {{ $attributes->merge(['class' => 'px-6 py-2 rounded'])}}>Login</button>
@endif