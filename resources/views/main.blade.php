@component('route_doc::layout')
    @foreach($routes as $route)
        <div style="display: flex; gap: 8px; margin-bottom: 8px">
            <div class="methods">
                @foreach($route->methods as $method)
                    <div class="method">{{ $method }}</div>
                @endforeach
            </div>
            <div>{{ $route->uri }}</div>
        </div>
        <div>{{ $route->description }}</div>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
@endcomponent
