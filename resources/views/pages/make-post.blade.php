<x-layout>
    <x-container class="place-content-center">
        <form action="/posts" method="post">
        @csrf
        <x-auth.input name="title" label="Title" type="text"/>
        <textarea name="content" id="content" cols="30" rows="10" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"></textarea>
        <div class="w-[50%] my-4">
            <label for="tags" class="flex">Choose Tags</label>
            <select name="tags[]" id="tags" multiple size="10" class="appearance-none px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        
        {{-- <x-auth.select class="max-w-[200px]" name="tags" label="Select Tags" multiple required>
            @foreach ($tags as $tag)
                <option value="{{$tag->id}}" class="w-40">{{$tag->name}}</option>
            @endforeach
        </x-auth.select> --}}
        <button type="submit" class="w-32 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Create Post</button>

        </form>
    </x-container>
</x-layout>