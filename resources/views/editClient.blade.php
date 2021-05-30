<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier un client : {{ $client->prenom }} {{ $client->nom }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Client #{{ $client->id_client }} : <br><br>
                    {!! Form::open(['url' => 'updateClient/'.$client->id_client]) !!}
                        
                    {!! Form::label('nom', 'Nom') !!}
                    {!! Form::text('nom', '{{$client->nom}}') !!}
                    <br><br>
                    {!! Form::label('prenom', 'Prénom') !!}
                    {!! Form::text('prenom' , '{{$client->prenom}}') !!}
                    <br><br>
                    {!! Form::label('date_naissance', 'Date de naissance') !!}
                    {!! Form::date('date_naissance', '{{$client->date_naissance}}') !!}
                    <br><br>
                    {!! Form::label('numero_permis', 'N* de permis') !!}
                    {!! Form::number('numero_permis', '{{$client->numero_permis}}') !!}
                    <br><br>
                    {!! Form::submit('Modifier le client') !!}

                    {!! Form::close() !!}<br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
