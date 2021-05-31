<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Nom de vehicule: {{ $vehicule->nom}}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
                <img src="{{$vehicule->image}}">
                </div>
            </div>
        </div>
    </div>
    <h2><b>Point De controle:</b></h2>
    <ul>

    <h3>{{ $vehicule->pointControle ->controle_type}}</h3><br>
    <p>{{ $vehicule->pointControle ->controle_description}}</p><br>
    <p>Employé en charge du contrôle : {{ $vehicule->pointControle ->employe ->nom }}

    </ul>
</x-app-layout>


