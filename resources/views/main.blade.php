<x-rd-layout>
    <div class="flex justify-between mb-8 items-center">
        <div>
            <div class="font-bold text-lg">
                {{ config('app.name') }}
            </div>
            <div class="text-gray-500">
                Routes Documentation
            </div>
        </div>
{{--        <x-rd-theme-switcher />--}}
    </div>

    @foreach($routes as $route)

        <x-rd-item
            :uri="$route->uri"
            :methods="$route->methods"
        />
    @endforeach
</x-rd-layout>
