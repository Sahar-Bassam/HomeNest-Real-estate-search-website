<x-layout>
    <h2 class="av-prop text-center mb-10">Currently Available Properties</h2>

    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

            @foreach ($properties as $property)
                <div class="card card-fade flex flex-col items-center text-center">

                    <img src="/images/estate.jpg" 
                         class="card-img mb-4 rounded-lg" 
                         alt="Property Image">
                         <div>
                            <h3 class="text-lg font-semibold mb-2">{{ $property['property_name'] }}</h3>
                            <p>{{$property->category->name}}</p>

                         </div>
                    <a href="/properties/{{ $property->id }}" class="btn">
                        View Details
                    </a>

                </div>
            @endforeach

        </div>
    </div>
    {{$properties->links()}}
</x-layout>
