<x-layout>
    <x-container>
        <div class="max-w-xl mx-auto mt-10">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                <h2 class="text-gray-700 text-2xl font-bold mb-6 text-center">Register as an Editor</h2>
                <form action="/editor/register" method="POST">
                    @csrf

                    <!-- Name -->
                    <x-auth.input name="name" label="Full Name" type="text" value="{{ old('name') }}" required />

                    <!-- Email -->
                    <x-auth.input name="email" label="Email Address" type="email" value="{{ old('email') }}" required />

                    <!-- Password -->
                    <x-auth.input name="password" label="Password" type="password" required />

                    <!-- Confirm Password -->
                    <x-auth.input name="password_confirmation" label="Confirm Password" type="password" required />

                    <x-auth.input name="role" label="" type="text" value="editor" hidden />

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