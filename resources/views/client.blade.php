<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retours</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Client N°:{{ $client ->id_client}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
                    <p><span class="font-semibold">Nom/prénom :</span> {{ $client->nom }} / {{ $client->prenom }} </p>
                    <p><span class="font-semibold">Date de naissance :</span> {{ $client->date_naissance }} </p>
                    <p><span class="font-semibold">Numéro de permis :</span> {{ $client->numero_permis }} </p>
                    @if (!empty($client->email))
                        <p><span class="font-semibold">Email :</span> {{ $client->email }} </p>
                    @endif
                    @if (!empty($client->telephone))
                        <p><span class="font-semibold">Telephone :</span> {{ $client->telephone }} </p>
                    @endif
                    <div class="inline-flex mt-2">
                        <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editClient/{{$client->id_client}}">Modifier</a>
                        <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteClient/{{$client->id_client}}">Supprimer</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>