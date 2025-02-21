<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg">
            {{ __('Inventory') }}
        </h2>
    </x-slot>
        <div class="py-1">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <x-inventory-add/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
