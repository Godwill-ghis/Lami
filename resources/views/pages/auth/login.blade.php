<x-layout>
    <x-container>
        <div class="max-w-xl mx-auto mt-10">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                <h2 class="text-gray-700 text-2xl font-bold mb-6 text-center">Login</h2>
                <form action="/signin" method="POST">
                    @csrf
                    <!-- Email -->
                    <x-auth.input name="email" label="Email Address" type="email" required />

                    <!-- Password -->
                    <x-auth.input name="password" label="Password" type="password" required />

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