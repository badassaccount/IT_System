<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg">
            {{ __('Inventory') }}
        </h2>
    </x-slot>
    <div class="flex-col">
        <div class="py-3">
            <div class="mx-auto">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl">
                    <x-inv-crumbs/>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <x-inventory-details/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
