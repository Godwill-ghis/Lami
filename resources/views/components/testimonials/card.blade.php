@props(['image' => 'random-male-face.png'])

<div class="m-4 text-center bg-slate-200 py-4 px-3 rounded-lg">
    <div class="flex items-center justify-center">
        <img src={{asset('images/'.$image)}} alt="Testimonial image" class="w-32 h-32 rounded-full object-cover">
    </div>
    <p class="my-2 text-sm text-gray-600">{{$testimonial}}</p>
    <p class="text-blue-500">{{$role}}</p>
</div>