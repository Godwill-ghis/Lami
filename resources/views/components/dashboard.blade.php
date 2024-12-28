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

<h1 class="text-2xl text-green-600 font-bold">{{session('message')}}</h1>
            <div>
                <p>{{auth()->user()->name}}</p>
                <div>
                    <img src="{{ auth()->user()?->profile_image ? asset('storage/' . $user->profile_image) : asset('images/placeholder/'.$randomImage) }}" alt="User Profile">
                    {{-- <img src="https://via.placeholder.com/150" alt="Placeholder Image" /> --}}
                </div>
            </div>
            {{-- <div>
                <h1 class="text-4xl font-extrabold text-slate-800/9 xl:w-[70%]">
                    <span class="text-blue-500 block">Welcome Back, {{auth()->user()->name}}!</span> Explore the Latest
                    Articles and
                    Stay Updated on Your Favorite Topics.
                </h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
                    <x-feature-card.card class="basis-1/4">
                        <x-slot:image>
                            <x-fwb-o-building class='w-10 h-10 text-blue-600' />
                        </x-slot:image>
                        <x-slot:heading>Exclusive, Subscriber-Only Content</x-slot:heading>
                        <x-slot:paragraph>Gain access to expertly written articles across diverse fields like Science,
                            Programming, Medicine, Engineering, and
                            more.</x-slot:paragraph>
                    </x-feature-card.card>
                    <x-feature-card.card class="basis-1/4">
                        <x-slot:image>
                            <x-fwb-o-bug class='w-10 h-10 text-teal-600' />
                        </x-slot:image>
                        <x-slot:heading>Support Passionate Creators</x-slot:heading>
                        <x-slot:paragraph>Your subscription helps talented editors get paid fairly for their work, fueling
                            quality content.</x-slot:paragraph>
                    </x-feature-card.card>
                    <x-feature-card.card class="basis-1/4">
                        <x-slot:image>
                            <x-fwb-o-chart-mixed class='w-10 h-10 text-red-600' />
                        </x-slot:image>
                        <x-slot:heading>Powerful Editor for Writers</x-slot:heading>
                        <x-slot:paragraph>Write, format, and publish effortlessly with our intuitive content editor,
                            designed for productivity and creativity.</x-slot:paragraph>
                    </x-feature-card.card>
                    <x-feature-card.card class="basis-1/4">
                        <x-slot:image>
                            <x-fwb-o-chart-pie class='w-10 h-10 text-purple-600' />
                        </x-slot:image>
                        <x-slot:heading>Stay Updated, Always</x-slot:heading>
                        <x-slot:paragraph>Get instant notifications
                </div> --}}