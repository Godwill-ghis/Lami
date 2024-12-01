@props(['type' => 'link', 'uri' => '#', 'icon' => '', 'iconstyle' => ''])

@if ($type === 'link')
<a href={{$uri}} {{ $attributes->merge(['class' => 'px-6 py-2 rounded'])}}>
    {{$slot}}
    {!!$icon!!}
    {{-- {!! Blade::render($icon) !!} --}}
</a>
@else
<button {{ $attributes->merge(['class' => 'px-6 py-2 rounded'])}}>Login</button>
@endif