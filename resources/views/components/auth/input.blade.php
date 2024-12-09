<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-semibold mb-2 ">
        {{ $label }}
    </label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        {{ $attributes }} />
    @error($name)
    <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>