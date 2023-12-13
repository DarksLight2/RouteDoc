<div>
    <x-rd-circle-button @click="$dispatch('toggleTheme')">
        <template x-if="localStorage.theme === 'dark'">
            <x-rd-icon-sun />
        </template>
        <template x-if="localStorage.theme === 'light'">
            <x-rd-icon-moon />
        </template>
    </x-rd-circle-button>
</div>
