<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un Contrat N°') }} {{$contrat->id_contrat}}
        </h2>
    </x-slot>

    <div class="py-12">

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
                        {!! Form::label('id_vehicule', 'Véhicule') !!}
                        <select id="id_vehicule" name="id_vehicule">
                            <option value="">Choisir un véhicule</option>
                            @forEach($vehicules as $vehicule)
                                @if ($contrat->id_vehicule == $vehicule->id_vehicule)
                                    <option value="{{$vehicule->id_vehicule}}" selected>{{ $vehicule->nom }}</option>
                                @else
                                    <option value="{{$vehicule->id_vehicule}}">{{ $vehicule->nom }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br><br>
                        {!! Form::label('km_avant', 'Km du véhicule avant') !!}
                        {!! Form::number('km_avant', '{{$contrat->km_avant}}') !!}
                        <br><br>
                        {!! Form::label('km_apres', 'Km du véhicule après') !!}
                        {!! Form::number('km_apres', '{{$contrat->km_apres}}') !!}
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
