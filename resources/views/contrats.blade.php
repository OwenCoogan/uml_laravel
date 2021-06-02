<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contrats') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ($errors->any())
            <div class="mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <p class="font-bold">Le contrat n'a pas été créé car les champs n'étaient pas correctement renseignés :</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard__wrap-add-item bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <button class="dashboard__btn-add-item outline-none w-full p-6 bg-white border-b border-gray-200">
                    Ajouter un contrat
                </button>
                <div class="dashboard__form-add-item hidden p-6 bg-white border-b border-gray-200">

                    {!! Form::open(['url' => 'storeContrat']) !!}

                        
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
                                <option value="{{$client->id_client}}">{{ $client->prenom }} {{ $client->nom }}</option>
                            @endforeach
                        </select>
                        <br><br>
                        <div class="inline-block p-4 rounded border-2 border-gray-800">
                            <p class="mb-2">Choisir les véhicules (max 10) :</p>
                            <div class="mt-2 add-contrat__vehicule-1">
                                {!! Form::label('id_vehicule_1', 'Véhicule 1') !!}
                                <select id="id_vehicule_1" name="id_vehicule_1">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-2 hidden">
                                {!! Form::label('id_vehicule_2', 'Véhicule 2') !!}
                                <select id="id_vehicule_2" name="id_vehicule_2">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-3 hidden">
                                {!! Form::label('id_vehicule_3', 'Véhicule 3') !!}
                                <select id="id_vehicule_3" name="id_vehicule_3">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-4 hidden">
                                {!! Form::label('id_vehicule_4', 'Véhicule 4') !!}
                                <select id="id_vehicule_4" name="id_vehicule_4">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-5 hidden">
                                {!! Form::label('id_vehicule_5', 'Véhicule 5') !!}
                                <select id="id_vehicule_5" name="id_vehicule_5">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-6 hidden">
                                {!! Form::label('id_vehicule_6', 'Véhicule 6') !!}
                                <select id="id_vehicule_6" name="id_vehicule_6">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-7 hidden">
                                {!! Form::label('id_vehicule_7', 'Véhicule 7') !!}
                                <select id="id_vehicule_7" name="id_vehicule_7">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-8 hidden">
                                {!! Form::label('id_vehicule_8', 'Véhicule 8') !!}
                                <select id="id_vehicule_8" name="id_vehicule_8">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-9 hidden">
                                {!! Form::label('id_vehicule_9', 'Véhicule 9') !!}
                                <select id="id_vehicule_9" name="id_vehicule_9">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-10 hidden">
                                {!! Form::label('id_vehicule_10', 'Véhicule 10') !!}
                                <select id="id_vehicule_10" name="id_vehicule_10">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="inline-block cursor-pointer mt-2 py-2 px-4 text-white bg-green-500 rounded add-contrat__btn-add-vehicule">Ajouter un véhicule</span>
                        </div>
                        <br><br>
                        {!! Form::label('km_avant', 'Km du véhicule avant') !!}
                        {!! Form::number('km_avant', '0') !!}
                        <br><br>
                        {!! Form::label('km_apres', 'Km du véhicule après') !!}
                        {!! Form::number('km_apres', '0') !!}
                        <br><br>
                        {!! Form::label('date_debut', 'Date début du contrat') !!}
                        {!! Form::date('date_debut', \Carbon\Carbon::now()) !!}
                        <br><br>
                        {!! Form::label('date_fin', 'Date fin du contrat') !!}
                        {!! Form::date('date_fin', \Carbon\Carbon::now()) !!}
                        <br><br>
                        {!! Form::submit('Nouveau Contrat') !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <ul>
                        @forEach($contrats as $contrat)
                            <li>
                                <a href="/contrat/{{$contrat->id_contrat}}" class="underline font-bold">Contrat N° {{ $contrat->id_contrat}}</a>
                                <br>
                                <p class="font-bold mt-1">Aperçu du contrat</p>
                                @if (!empty($contrat->employe))
                                    <p>Employé : {{ $contrat->employe->nom }} ({{ $contrat->employe->fonction }})</p>
                                @endif
                                @if (!empty($contrat->client))
                                    <p>Client : {{ $contrat->client->nom }} {{ $contrat->client->prenom }}</p>
                                @endif

                                @php
                                    $nbVehicule = 0
                                @endphp
                                @foreach ($contratToVehicules as $contratToVehicule)
                                    @if ($contratToVehicule->id_contrat === $contrat->id_contrat )
                                        @php
                                            $nbVehicule++
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($nbVehicule > 0)
                                    <p>Nombre de véhicule loué : {{ $nbVehicule }}</p>
                                @else
                                    <p>Aucun véhicule loué</p>
                                @endif
                                
                                <p><span class="font-semibold">Date début du contrat :</span> {{ $contrat->date_debut }} </p>
                                <p><span class="font-semibold">Date fin du contrat :</span> {{ $contrat->date_fin }} </p>
                                <div class="inline-flex mt-2">
                                    <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editContrat/{{$contrat->id_contrat}}">Modifier</a>
                                    <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteContrat/{{$contrat->id_contrat}}">Supprimer</a>
                                </div>
                                <br>
                            </li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
