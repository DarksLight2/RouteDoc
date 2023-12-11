@props([
    'uri',
    'methods'
])
<div
    class="flex flex-wrap"
    x-data="{
            activeEndpoint: false,
            activeTab: null,
            activeMethod: null,
            description: 'Choose a method to see its details.'
        }">
    <div class="bg-white shadow-md rounded-lg overflow-hidden mr-4 mb-4 p-4 flex-auto" @click.away="activeEndpoint = null; activeMethod = null; activeTab = null; description = 'Choose a method to see its details.'">
        <h3 @click.stop="activeEndpoint = !activeEndpoint; activeMethod = null; description = 'Choose a method to see its details.'" class="cursor-pointer text-lg leading-6 font-medium text-gray-900">
            {{ $uri }}
        </h3>
        <p x-text="description" id="description" class="mt-2 max-w-xl text-sm text-gray-500" x-show="activeEndpoint"></p>
        <div class="mt-5 flex gap-2" x-show="activeEndpoint">
            @foreach($methods as $method_name => $method)
                <x-rd-primary-button @click.stop="activeMethod = '{{ $method_name }}'; activeTab = 'description'; description = '{{ $method->description }}'">{{ $method_name }}</x-rd-primary-button>
            @endforeach
        </div>
        <div class="mt-5 gap-4 flex" x-show="activeEndpoint && activeMethod !== null">
            <x-rd-primary-button @click.stop="activeTab = 'params'">Параметры</x-rd-primary-button>
            <x-rd-success-button @click.stop="activeTab = 'success'">Успешный запрос</x-rd-success-button>
            <x-rd-error-button @click.stop="activeTab = 'error'">Ошибка</x-rd-error-button>
        </div>

        @foreach($methods as $method_name => $method)
            @if(!empty($method->params))
                <div class="px-4 py-5" x-show="activeEndpoint && activeMethod === '{{ $method_name }}' && activeTab === 'params'">
                    <pre>{{ json_encode($method->params, JSON_PRETTY_PRINT) }}</pre>
                </div>
            @endif
            @if(!empty($method->return_success))
                <div class="px-4 py-5" x-show="activeEndpoint && activeMethod === '{{ $method_name }}' && activeTab === 'success'">
                    <pre>{{ json_encode($method->return_success, JSON_PRETTY_PRINT) }}</pre>
                </div>
            @endif
            @if(!empty($method->return_error))
                <div class="px-4 py-5" x-show="activeEndpoint && activeMethod === '{{ $method_name }}' && activeTab === 'error'">
                    <pre>{{ json_encode($method->return_error, JSON_PRETTY_PRINT) }}</pre>
                </div>
            @endif
        @endforeach
    </div>
</div>
