<x-rd-layout>
    @foreach($routes as $route)

        <x-rd-item
            :uri="$route->uri"
            :methods="$route->methods"
        />
    @endforeach
</x-rd-layout>
