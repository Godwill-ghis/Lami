@php
    $images = collect([
        'placeholder.jpg',
        'placeholder1.jpg',
        'placeholder2.jpg',
        'placeholder3.jpg',
        'placeholder4.jpg',
        'placeholder5.jpg',
        'placeholder6.jpg',
        'placeholder7.jpg',
        'placeholder8.jpg',
        'placeholder9.jpg',
        'placeholder10.jpg',
        'placeholder11.jpg',
        'placeholder12.jpg',
        'placeholder13.jpg',
        'placeholder14.jpg',
        'placeholder15.jpg',
        'placeholder16.jpg',
        'placeholder17.jpg',
        'placeholder18.webp',
        'placeholder19.jpg',
        'placeholder20.webp',
        'placeholder21.jpg',
        'placeholder22.webp',
        'placeholder23.jpg',
        'placeholder24.jpg',
        'placeholder25.webp',
        'placeholder26.webp',
        'placeholder27.webp',

]);
    $randomImage = $images->random();
@endphp

@props(['posts'])

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
    @foreach ($posts as $post)
        <div class="bg-white shadow-lg rounded-lg p-4">
             <x-post.card :$post :randomimage="$images->random()"/>
        </div>
                    
    @endforeach
</div>