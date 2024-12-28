<x-layout>
    <main class="xl:flex justify-center">
        <x-container class="space-y-20  mt-6">
            @guest
            <x-guest-view />
            @endguest
            @auth
            <x-dashboard :$posts/>
            @endauth
        </x-container>
    </main>
</x-layout>