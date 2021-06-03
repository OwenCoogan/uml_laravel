<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retours</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Vehicule N°:{{ $vehicule ->id_vehicule}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
                    <p><span class="font-semibold">Nom :</span> {{ $vehicule->nom }} </p>
                    <p><span class="font-semibold">Immatriculation :</span> {{ $vehicule->immatriculation }} </p>
                    <br>
                    <img src="{{$vehicule->image}}">
                    <br>
                    <div class="inline-flex mt-2">
                        <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editVehicule/{{$vehicule->id_vehicule}}">Modifier</a>
                        <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteVehicule/{{$vehicule->id_vehicule}}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if (!empty($vehicule->pointControle))

            <div class="p-6 bg-white border-b border-gray-200 vehicule">
                    <h2><b>Point De controle:</b></h2>
                    <ul>
                        <li>
                            <h3>{{ $vehicule->pointControle ->controle_type}}</h3><br>
                            <p>{{ $vehicule->pointControle ->controle_description}}</p><br>
                            <p>Employé en charge du contrôle : {{ $vehicule->pointControle ->employe ->nom }}</p>
                        </li>

                    </ul>
                </div>
            @endif
            </div>
        </div>
    </div>

</x-app-layout>


