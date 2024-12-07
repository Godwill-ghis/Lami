@php
$plan = (int) $plan;
@endphp

<x-layout>
    <x-container>
        <h2 class="text-blue-500 text-2xl">Checkout Page</h2>
        @if ($plan === 1)
        <p>You choosed the Basic Plan</p>
        @endif
        @if ($plan === 2)
        <p>You choosed the Premium Plan</p>
        @endif
    </x-container>
</x-layout>