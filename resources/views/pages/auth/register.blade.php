<x-layout>
    <x-container>
        <div class="max-w-xl mx-auto mt-10">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                <h2 class="text-gray-700 text-2xl font-bold mb-6 text-center">Register</h2>
                <form action="/register" method="POST">
                    @csrf

                    <!-- Name -->
                    <x-auth.input name="name" label="Full Name" type="text" value="{{ old('name') }}" required />

                    <!-- Email -->
                    <x-auth.input name="email" label="Email Address" type="email" value="{{ old('email') }}" required />

                    <!-- Password -->
                    <x-auth.input name="password" label="Password" type="password" required />

                    <!-- Confirm Password -->
                    <x-auth.input name="password_confirmation" label="Confirm Password" type="password" required />

                    <x-auth.input name="role" label="" type="text" value="subscriber" hidden />

                    <!-- Plan Selection -->
                    <x-auth.select name="plan" label="Select Your Plan" required>
                        {{-- <option value="free" {{ old('plan')=='free' ? 'selected' : '' }}>Free</option> --}}
                        @if($plan)

                        <option value='0' {{ $plan==='0' ? 'selected' : '' }}>Free</option>
                        <option value='1' {{ $plan==='1' ? 'selected' : '' }}>Basic</option>
                        <option value='2' {{ $plan==='2' ? 'selected' : '' }}>Premium</option>

                        @else
                        <option value='0' {{ old('plan')==='0' ? 'selected' : '' }}>Free</option>
                        <option value='1' {{ old('plan')==='1' ? 'selected' : '' }}>Basic</option>
                        <option value='2' {{ old('plan')==='2' ? 'selected' : '' }}>Premium</option>
                        @endif

                    </x-auth.select>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-container>
</x-layout>