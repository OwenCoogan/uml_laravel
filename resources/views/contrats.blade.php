<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contrats') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard__wrap-add-item bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <button class="dashboard__btn-add-item outline-none w-full p-6 bg-white border-b border-gray-200">
                    Ajouter un contrat
                </button>
                <div class="dashboard__form-add-item hidden p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['url' => 'storeContrat']) !!}

                        {!! Form::label('id_vehicule', 'Véhicule') !!}
                        <select id="id_vehicule" name="id_vehicule">
                            <option value="" selected="selected">Choisir un véhicule</option>
                            @forEach($vehicules as $vehicule)
                                <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                            @endforeach
                        </select>
                        <br><br>
                        {!! Form::label('id_employe', 'Employé') !!}
                        <select id="id_employe" name="id_employe">
                            <option value="" selected="selected">Choisir un employé</option>
                            @forEach($employes as $employe)
                                <option value="{{$employe->id_employe}}">{{ $employe->nom }}</option>
                            @endforeach
                        </select>
                        <br><br>
                        {!! Form::label('id_client', 'Client') !!}
                        <select id="id_client" name="id_client">
                            <option value="" selected="selected">Choisir un client</option>
                            @forEach($clients as $client)
                                <option value="{{$client->id_client}}">{{ $client->nom }}</option>
                            @endforeach
                        </select>
                        <br><br>
                        {!! Form::submit('Nouveau Contrat') !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @forEach($contrats as $contrat)
                        <li>
                            <a href="/contrat/{{$contrat->id_contrat}}" class="underline font-bold">Contrat N° {{ $contrat->id_contrat}}</a>
                            <br>
                            <p class="font-bold mt-1">Aperçu du contrat</p>
                            @if (!empty($contrat->vehicule))
                            <p>Véhicule : {{ $contrat->vehicule->nom }} / {{ $contrat->vehicule->immatriculation }}</p>
                            @endif
                            @if (!empty($contrat->client))
                            <p>Client : {{ $contrat->client->nom }} {{ $contrat->client->prenom }}</p>
                            @endif
                            @if (!empty($contrat->employe))
                            <p>Employé : {{ $contrat->employe->nom }} ({{ $contrat->employe->fonction }})</p>
                            @endif
                            <div class="inline-flex mt-2">
                                <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editContrat/{{$contrat->id_contrat}}">Modifier</a>
                                <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteContrat/{{$contrat->id_contrat}}">Supprimer</a>
                            </div>
                            <br>
                        </li>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
