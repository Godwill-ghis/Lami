<div class=" py-12" id="contact">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Get in Touch
        </h2>
        <form action="/contact" method="POST" class="space-y-6 bg-white p-8 rounded-lg shadow-lg">
            @csrf
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" id="name" name="name"
                    class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Your Full Name" required />
            </div>
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Your Email Address" required />
            </div>
            <!-- Message Field -->
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="message" name="message" rows="4"
                    class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your message here..." required></textarea>
            </div>
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-medium py-2 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>