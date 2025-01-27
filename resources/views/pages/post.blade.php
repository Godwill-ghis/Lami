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
    $profiles = collect([
        'user.jpg',
        'random-male-face.png',
        'random-female-face.jpeg',
        'Face.jpeg',
        'app.webp',
        'app-in-use.jpg',
]);
    $randomimage = $images->random();
    $randomProfile = $profiles->random();
@endphp

<x-layout>
    <x-container>
        <div class="flex justify-center">
            <div class="w-8/12 max-w-[800px] mt-10">
                <div class="p-6 rounded-lg">
                    <h1 class="text-3xl font-bold text-gray-800">{{$post->title}}</h1>
                    <div class="flex items-center gap-2 mt-3">
                        <img src="{{asset('images/' . $randomProfile)}}" alt="avatar" class="w-10 h-10 rounded-full">
                        <a href="/users/{{$post->user->name}}" class="text-blue-400 text-sm">{{$post->user->name}}</a>
                    </div>
                    <p class="text-gray-800 text-sm font-sans mt-3">{{$post->created_at->diffForHumans()}}</p>
                    <div class="mt-5">
                        <img src="{{asset('images/placeholder/' . $randomimage)}}" alt="post image" class="w-full h-40 object-cover rounded-lg">
                    </div>
                    <div class="mt-5">
                        <p class="text-gray-800 text-lg font-sans">{{$post->content}}</p>

                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-layout>