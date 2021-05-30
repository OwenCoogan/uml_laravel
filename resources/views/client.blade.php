<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            Client N*:{{ $client ->id_client}}
            <br>
            Prénom : {{ $client->prenom }}
            <br>
            Nom : {{ $client->nom }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
                    <p>DOB : {{ $client->date_naissance }}</p>
                    <br>
                    <p>N* de permis : {{ $client->numero_permis }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>