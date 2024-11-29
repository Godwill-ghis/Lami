@props(['uri' => '', 'active' => false])

{{-- {{dd($active)}} --}}
@php
$isActive = $active ? 'text-blue-500' : '';
@endphp
<a href="{{$uri}}">
    <li {{$attributes->merge(['class' => 'hover:text-blue-400 font-bold ' . $isActive])}}>{{$slot}}
    </li>
</a>