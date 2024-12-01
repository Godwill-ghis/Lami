<x-layout>
    <main class="xl:flex justify-center">
        <x-container class="space-y-20  mt-6">
            <div class="text-center space-y-10  flex justify-center items-center flex-col">
                <h1 class="text-4xl font-extrabold text-slate-800/9 xl:w-[70%]">
                    <span class="text-blue-500 block">Empower Your
                        Curiosity:</span> Unlock Expert Insights on
                    Science, Tech,
                    Medicine, and
                    More!
                </h1>
                <p class="text-lg xl:w-[70%]">Discover premium articles from top editors, stay updated on your favorite
                    topics, and
                    join a community driven by
                    knowledge.</p>
                <div class="flex gap-5 justify-center items-center">
                    <p class="text-blue-500 text-sm">Start Exploring Today!</p>
                    <x-button uri='signup'
                        class="bg-blue-600 text-white hover:bg-blue-500 flex justify-center items-center gap-3">
                        Subscribe Now
                        <x-fwb-o-badge-check class='w-4 h-4' />
                    </x-button>
                    <x-button uri='signin'
                        class="border border-blue-600 hover:text-blue-500 flex justify-center items-center gap-3">
                        Become an Editor
                        <x-fwb-o-bookmark class="w-4 h-4" />
                    </x-button>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="{{asset('images/layer.webp')}}" alt="" class="h-[100%]">
            </div>
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
                    <x-slot:paragraph>Get instant notifications when your favorite authors or topics are updated.
                    </x-slot:paragraph>
                </x-feature-card.card>
                <x-feature-card.card class="basis-1/4">
                    <x-slot:image>
                        <x-fwb-o-bullhorn class='w-10 h-10 text-pink-600' />
                    </x-slot:image>
                    <x-slot:heading>Engage and Improve Together</x-slot:heading>
                    <x-slot:paragraph>Use our Message Board to suggest improvements, request topics, or collaborate with
                        editors and the community.</x-slot:paragraph>
                </x-feature-card.card>
                <x-feature-card.card class="basis-1/4">
                    <x-slot:image>
                        <x-fwb-o-bell-active class='w-10 h-10 text-yellow-800' />
                    </x-slot:image>
                    <x-slot:heading>Personalized Content</x-slot:heading>
                    <x-slot:paragraph>Subscribe to topics or creators and get tailored content recommendations based on
                        your interests.</x-slot:paragraph>
                </x-feature-card.card>
                <x-feature-card.card class="basis-1/4">
                    <x-slot:image>
                        <x-fwb-o-atom class='w-10 h-10 text-yellow-600' />
                    </x-slot:image>
                    <x-slot:heading>Global Community of Knowledge Seekers</x-slot:heading>
                    <x-slot:paragraph>Connect with like-minded readers and editors from around the world who share your
                        passion for learning.</x-slot:paragraph>
                </x-feature-card.card>
                <x-feature-card.card class="basis-1/4">
                    <x-slot:image>
                        <x-fwb-o-badge-check class='w-10 h-10 text-green-600' />
                    </x-slot:image>
                    <x-slot:heading>Stay Updated, Always</x-slot:heading>
                    <x-slot:paragraph>Get instant notifications when your favorite authors or topics are updated.
                    </x-slot:paragraph>
                </x-feature-card.card>
            </div>
            <div class="mt-10 flex flex-col justify-center items-center py-10 px-6 bg-slate-100">
                <h2 class="text-4xl text-gray-800 font-bold">How it works</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-10 mt-10">
                    <x-work.card>
                        <x-slot:heading>For Readers</x-slot:heading>
                        <x-work.items>
                            <x-slot:subHeading>Subscribe:</x-slot:subHeading>
                            Choose your favorite topics or authors.
                        </x-work.items>
                        <x-work.items>
                            <x-slot:subHeading>Explore:</x-slot:subHeading>
                            Dive into a library of premium articles curated just for you.
                        </x-work.items>
                        <x-work.items>
                            <x-slot:subHeading>Engage:</x-slot:subHeading>
                            Like, comment, or share feedback on content that inspires you.
                            For Editors.
                        </x-work.items>
                    </x-work.card>
                    <x-work.card>
                        <x-slot:heading>For Editors</x-slot:heading>
                        <x-work.items>
                            <x-slot:subHeading>Create:</x-slot:subHeading>
                            Use our professional editor to write and polish your articles.
                        </x-work.items>
                        <x-work.items>
                            <x-slot:subHeading>Publish:</x-slot:subHeading>
                            Share your expertise with a growing audience of curious minds.
                        </x-work.items>
                        <x-work.items>
                            <x-slot:subHeading>Earn:</x-slot:subHeading>
                            Get paid for every article read by our subscribers.
                        </x-work.items>
                    </x-work.card>
                </div>
            </div>
        </x-container>
    </main>
</x-layout>