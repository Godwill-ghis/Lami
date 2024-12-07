{{-- <div class="bg-gray-100 py-12" id="pricing">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Affordable Plans for Every Knowledge Seeker
        </h2>
        <p class="text-gray-600 mb-8">
            Choose a plan that suits your needs and dive into a world of knowledge.
        </p>
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Basic Plan -->
            <div class="bg-white rounded-lg shadow-lg p-6 border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Basic Plan</h3>
                <p class="text-gray-500 mb-4">$5/month</p>
                <p class="text-gray-600 mb-6">Access to 5 articles per month</p>
                <a href="/subscribe"
                    class="block w-full text-center bg-blue-500 text-white font-medium py-2 px-4 rounded hover:bg-blue-600">
                    Subscribe Now
                </a>
            </div>
            <!-- Premium Plan -->
            <div class="bg-white rounded-lg shadow-lg p-6 border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Premium Plan</h3>
                <p class="text-gray-500 mb-4">$15/month</p>
                <p class="text-gray-600 mb-6">Unlimited access to all articles and features</p>
                <a href="/subscribe"
                    class="block w-full text-center bg-blue-500 text-white font-medium py-2 px-4 rounded hover:bg-blue-600">
                    Subscribe Now
                </a>
            </div>
        </div>
    </div>
</div> --}}

<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-6">Pricing Plans</h2>
        <p class="text-gray-600 mb-12">
            Find the perfect plan for your reading needs. Start for free, or unlock more features with our
            paid
            plans.
        </p>

        <div class="grid gap-8 md:grid-cols-3">
            <!-- Free Plan -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Free</h3>
                <p class="text-gray-600 mb-4">6 articles per month</p>
                <p class="text-4xl font-extrabold text-gray-800 mb-6">$0<span
                        class="text-sm text-gray-500">/month</span></p>
                <ul class="text-gray-600 space-y-3 mb-6">
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Access to free articles
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        6 monthly articles
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Community features
                    </li>
                </ul>
                <form action="/register" method="POST">
                    @csrf
                    <input hidden type="text" name="plan" value="0">
                    <button
                        class="bg-blue-500 text-white text-center font-medium py-2 px-6 rounded-lg hover:bg-blue-600 transition">Subscribe
                        Now</button>

                </form>
            </div>

            <!-- Basic Plan -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Basic</h3>
                <p class="text-gray-600 mb-4">30 articles per month</p>
                <p class="text-4xl font-extrabold text-gray-800 mb-6">$5<span
                        class="text-sm text-gray-500">/month</span></p>
                <ul class="text-gray-600 space-y-3 mb-6">
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Access to more articles
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        30 monthly articles
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Priority support
                    </li>
                </ul>
                <form action="/register" method="POST">
                    @csrf
                    <input hidden type="text" name="plan" value="1">
                    <button
                        class="bg-blue-500 text-white text-center font-medium py-2 px-6 rounded-lg hover:bg-blue-600 transition">Subscribe
                        Now</button>

                </form>
            </div>

            <!-- Premium Plan -->
            <div class="bg-blue-50 border border-blue-500 rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-blue-600 mb-4">Premium</h3>
                <p class="text-blue-500 mb-4">Unlimited articles</p>
                <p class="text-4xl font-extrabold text-blue-600 mb-6">$15<span
                        class="text-sm text-blue-400">/month</span></p>
                <ul class="text-blue-600 space-y-3 mb-6">
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Unlimited access to articles
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Exclusive features
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Direct support from editors
                    </li>
                </ul>
                <form action="/register" method="POST">
                    @csrf
                    <input hidden type="text" name="plan" value="2">
                    <button
                        class="bg-blue-500 text-white text-center font-medium py-2 px-6 rounded-lg hover:bg-blue-600 transition">Subscribe
                        Now</button>

                </form>
            </div>
        </div>
    </div>
</div>