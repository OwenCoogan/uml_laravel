<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retours</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contract N°:{{ $contrat ->id_contrat}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
                    @if (!empty($contrat->employe))
                        <p>Employé : {{ $contrat->employe->nom }} ({{ $contrat->employe->fonction }})</p>
                    @endif
                    @if (!empty($contrat->client))
                        <p>Client : {{ $contrat->client->nom }} {{ $contrat->client->prenom }}</p>
                    @endif
                    
                    @php
                        $nbVehicule = 0;
                    @endphp
                    @foreach ($contratToVehicules as $contratToVehicule)
                        @if ($contratToVehicule->id_contrat === $contrat->id_contrat )
                            @php
                                $nbVehicule++;
                            @endphp
                            <p>Véhicule {{ $nbVehicule }} : <a href="/vehicule/{{$contratToVehicule->vehicule->id_vehicule}}">{{$contratToVehicule->vehicule->nom }}</a> / {{ $contratToVehicule->vehicule->immatriculation }}</p>
                        @endif
                    @endforeach
                    @if ($nbVehicule == 0)
                        <p>Aucun véhicule loué</p>
                    @endif

                    <p><span class="font-semibold">Date début du contrat :</span> {{ $contrat->date_debut }} </p>
                    <p><span class="font-semibold">Date fin du contrat :</span> {{ $contrat->date_fin }} </p>
                    <div class="inline-flex mt-2">
                        <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editContrat/{{$contrat->id_contrat}}">Modifier</a>
                        <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteContrat/{{$contrat->id_contrat}}">Supprimer</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


