<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="flex-grow flex min-h-0 border-t">
                <x-dashboard-details />
            </div>
        </div>
    </div>
</x-app-layout>