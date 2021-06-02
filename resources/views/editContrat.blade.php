<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retours</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le Contrat N°') }} {{$contrat->id_contrat}}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ($errors->any())
            <div class="mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">

                        <p class="font-bold">Le contrat n'a pas été modifié car les champs n'étaient pas correctement renseignés :</p>
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
            <div class="dashboard__wrap-edit-item bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="dashboard__form-edit-item p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['url' => 'updateContrat/'.$contrat->id_contrat]) !!}

                        
                        {!! Form::label('id_employe', 'Employé') !!}
                        <select id="id_employe" name="id_employe">
                            <option value="">Choisir un employé</option>
                            @forEach($employes as $employe)
                                @if ($contrat->id_employe == $employe->id_employe)
                                    <option value="{{$employe->id_employe}}" selected>{{ $employe->nom }}</option>
                                @else
                                    <option value="{{$employe->id_employe}}">{{ $employe->nom }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br><br>
                        {!! Form::label('id_client', 'Client') !!}
                        <select id="id_client" name="id_client">
                            <option value="">Choisir un client</option>
                            @forEach($clients as $client)
                                @if ($contrat->id_client == $client->id_client)
                                    <option value="{{$client->id_client}}" selected>{{ $client->nom }}</option>
                                @else
                                    <option value="{{$client->id_client}}">{{ $client->nom }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br><br>
                        {{-- {!! Form::label('id_vehicule', 'Véhicule') !!}
                        <select id="id_vehicule" name="id_vehicule">
                            <option value="">Choisir un véhicule</option>
                            @forEach($vehicules as $vehicule)
                                @if ($contrat->id_vehicule == $vehicule->id_vehicule)
                                    <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                @else
                                    <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                @endif
                            @endforeach
                        </select> --}}

                        <div class="inline-block p-4 rounded border-2 border-gray-800">
                            <p class="mb-2">Choisir les véhicules (max 10) :</p>
                            @php
                                $i = 0;
                                $vehiculesMatch = array(0,0,0,0,0,0,0,0,0,0);
                                $vehicule_1_id = 0;
                                $vehicule_2_id = 0;
                                $vehicule_3_id = 0;
                                $vehicule_4_id = 0;
                                $vehicule_5_id = 0;
                                $vehicule_6_id = 0;
                                $vehicule_7_id = 0;
                                $vehicule_8_id = 0;
                                $vehicule_9_id = 0;
                                $vehicule_10_id = 0;
                            @endphp
                            @foreach ($contratToVehicules as $contratToVehicule)
                                @if ($contratToVehicule->id_contrat == $contrat->id_contrat)
                                    @php
                                        $vehiculesMatch[$i] = $contratToVehicule->id_vehicule;
                                        $i++;
                                    @endphp
                                @else
                                    
                                @endif
                            @endforeach
                            <div class="mt-2 add-contrat__vehicule-1">
                                {!! Form::label('id_vehicule_1', 'Véhicule 1') !!}
                                <select id="id_vehicule_1" name="id_vehicule_1">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[0] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-2 hidden">
                                {!! Form::label('id_vehicule_2', 'Véhicule 2') !!}
                                <select id="id_vehicule_2" name="id_vehicule_2">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[1] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-3 hidden">
                                {!! Form::label('id_vehicule_3', 'Véhicule 3') !!}
                                <select id="id_vehicule_3" name="id_vehicule_3">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[2] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-4 hidden">
                                {!! Form::label('id_vehicule_4', 'Véhicule 4') !!}
                                <select id="id_vehicule_4" name="id_vehicule_4">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[3] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-5 hidden">
                                {!! Form::label('id_vehicule_5', 'Véhicule 5') !!}
                                <select id="id_vehicule_5" name="id_vehicule_5">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[4] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-6 hidden">
                                {!! Form::label('id_vehicule_6', 'Véhicule 6') !!}
                                <select id="id_vehicule_6" name="id_vehicule_6">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[5] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-7 hidden">
                                {!! Form::label('id_vehicule_7', 'Véhicule 7') !!}
                                <select id="id_vehicule_7" name="id_vehicule_7">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[6] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-8 hidden">
                                {!! Form::label('id_vehicule_8', 'Véhicule 8') !!}
                                <select id="id_vehicule_8" name="id_vehicule_8">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[7] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-9 hidden">
                                {!! Form::label('id_vehicule_9', 'Véhicule 9') !!}
                                <select id="id_vehicule_9" name="id_vehicule_9">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[8] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2 add-contrat__vehicule-10 hidden">
                                {!! Form::label('id_vehicule_10', 'Véhicule 10') !!}
                                <select id="id_vehicule_10" name="id_vehicule_10">
                                    <option value="" selected="selected">Choisir un Véhicule</option>
                                    @forEach($vehicules as $vehicule)
                                        @if ($vehiculesMatch[9] == $vehicule->id_vehicule)
                                            <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                        @else
                                            <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <span class="inline-block cursor-pointer mt-2 py-2 px-4 text-white bg-green-500 rounded add-contrat__btn-add-vehicule">Ajouter un véhicule</span>
                        </div>

                        <br><br>
                        {!! Form::label('km_avant', 'Km du véhicule avant') !!}
                        {!! Form::number('km_avant', $contrat->km_avant) !!}
                        <br><br>
                        {!! Form::label('km_apres', 'Km du véhicule après') !!}
                        {!! Form::number('km_apres', $contrat->km_apres) !!}
                        <br><br>
                        {!! Form::label('date_debut', 'Date début du contrat') !!}
                        {!! Form::date('date_debut', \Carbon\Carbon::parse($contrat->date_debut)->format('Y-m-d')) !!}
                        <br><br>
                        {!! Form::label('date_fin', 'Date fin du contrat') !!}
                        {!! Form::date('date_fin', \Carbon\Carbon::parse($contrat->date_fin)->format('Y-m-d')) !!}
                        <br><br>
                        {!! Form::submit('Modifier le Contrat') !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
