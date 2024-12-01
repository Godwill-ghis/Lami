{{-- logo, nav linkd, call to action --}}

<div class="border-b-2 xl:flex justify-center">
    <nav class=" p-8 flex justify-between items-center text-base text-gray-800 xl:w-10/12 xl:align-center">

        <a href="/">
            <x-fwb-o-brain class="w-10 h-10 inline text-yellow-300" />
            <p class="inline text-blue-600 font-bold text-4xl align-middle">Lami</p>
        </a>

        {{-- links --}}

        <div>
            <ul class="justify-between gap-4 lg:flex hidden">
                {{-- nav links --}}
                <x-nav-link uri="/" :active="request()->is('/')">Product</x-nav-link>
                <x-nav-link uri="pricing" :active="request()->is('pricing')">Pricing</x-nav-link>
                <x-nav-link uri="contact" :active="request()->is('contact')">Contact</x-nav-link>
                <x-nav-link uri="company" :active="request()->is('company')">Company</x-nav-link>
            </ul>
        </div>

        <div class="flex gap-4 justify-center align-middle">
            <div class="hidden sm:flex gap-5">
                {{-- CTA --}}
                <x-button uri='signup' class="bg-blue-600 text-white hover:bg-blue-500">Sign UP</x-button>
                <x-button uri='signin' class="border border-blue-600 hover:text-blue-500">SignIn</x-button>
            </div>

            <div class="lg:hidden place-content-center">
                <x-fwb-s-bars class="w-6 h-6" />
            </div>
        </div>

    </nav>
</div>