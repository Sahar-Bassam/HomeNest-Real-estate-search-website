<x-layout>
    <form action="{{route('properties.store')}}" method="POST">
        @csrf
        <h2>Add a New Listing</h2>

        <label for="name">Property Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            required
        >

        <label for="price">Price</label>
        <input 
            id="price"
            name="price"
            value="{{ old('price') }}" 
            type="number" 
            required
        >

        <label for="bio">Description:</label>
        <textarea
            rows="5"
            id="bio" 
            name="bio" 
            required
        >{{old('bio')}}</textarea>

        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id" required>
            <option value="" disabled selected>Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Add Listing</button>
        @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
            <li class="my-2 text-red-500">{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </form>
</x-layout>
