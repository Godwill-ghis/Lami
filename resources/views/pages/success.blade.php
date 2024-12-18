<x-layout>
    <x-container class="flex flex-col justify-center items-center">
        <main class="xl:flex justify-center">
            <h2 class="text-lg text-green-600 bg-green-200 p-8 mt-28">
                {{$message ?? 'Subscription successful!'}}
                @isset($subscription)
                @if ($subscription->name === 'BASIC')
                <a href="#" class="underline">Upgrade your Plan to premium to get access to unlimited artcle</a>
                @endif
                @endisset
            </h2>
        </main>
    </x-container>
</x-layout>