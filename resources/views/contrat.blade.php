<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            Contract N*:{{ $contrat ->id_contrat}}
            <br>
            Employé : {{$contrat->employe->nom }}
            <br>
            Client : {{$contrat->client->nom }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
               <a href="/vehicule/{{$contrat->vehicule->id_vehicule}}">{{$contrat->vehicule->nom }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


