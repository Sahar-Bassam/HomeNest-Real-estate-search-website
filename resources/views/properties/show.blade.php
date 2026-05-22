<x-layout>
    <h2>{{ $property->property_name }}</h2>
    <div class="bg-grey-200 p-4 rounded">
        <p><strong>Price:</strong> {{ $property->price }}</p>
         <p><strong>Details: </strong>{{ $property->details }}</p>
    </div>

      <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>More Information</h3>
    <p><strong>Category:</strong> {{ $property->category->name }}</p>
    <p><strong>Location:</strong> {{ $property->property_name }}</p>
    <p><strong>About the Property:</strong></p>
    <p>{{ $property->category->description }}</p>
  </div>
  <form action="{{route('properties.destroy' , $property->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn my-4">Delete Property</button>

  </form>
</x-layout>
