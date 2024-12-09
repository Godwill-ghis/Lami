<x-layout>
    <x-container class="flex items-center justify-center flex-col gap-5 h-[50vh]">
        <h1 class="text-2xl text-slate-700 text-center">Check your Email for a verification link sen to you</h1>
        <form action="/email/verification-notification" method="POST">
            @csrf
            <button
                class="bg-blue-500 text-white text-center font-medium py-2 px-6 rounded-lg hover:bg-blue-600 transition">Resend
                Verification Email</button>

        </form>
    </x-container>
</x-layout>