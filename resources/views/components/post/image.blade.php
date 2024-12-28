@props(['randomimage'])
<div>
    <img src="{{ auth()->user()?->profile_image ? asset('storage/' . $user->profile_image) : asset('images/placeholder/'.$randomimage) }}" alt="User Profile" class="w-[100%] h-[300px] rounded-sm">
</div>