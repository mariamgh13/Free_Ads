<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bienvenue {{Auth::user()->name }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('annonces') }}" class="text-sm text-gray-700 underline">Clic pour voir les annonces Bro !</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('users') }}" class="text-sm text-gray-700 underline">Clic pour voir les utilisateurs Bro !</a>
                </div>
            </div>
        </div>
    </div>
    
    
</x-app-layout>
