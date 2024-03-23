<x-admin.layout>
    <x-slot name="header">
        {{ $title }}
    </x-slot>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div>
            <x-admin.message />
            {{ $slot }}
        </div>
    </div>
</x-admin.layout>