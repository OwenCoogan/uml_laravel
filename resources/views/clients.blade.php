<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ($errors->any())
            <div class="mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <p class="font-bold">Le client n'a pas été créé car les champs n'étaient pas correctement renseignés :</p>
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
                    Ajouter un client
                </button>
                <div class="dashboard__form-add-item hidden p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['url' => 'storeClient']) !!}

                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom') !!}
                        <br><br>
                        {!! Form::label('prenom', 'Prénom') !!}
                        {!! Form::text('prenom') !!}
                        <br><br>
                        {!! Form::label('date_naissance', 'Date de naissance') !!}
                        {!! Form::date('date_naissance') !!}
                        <br><br>
                        {!! Form::label('numero_permis', 'N* de permis') !!}
                        {!! Form::number('numero_permis') !!}
                        <br><br>
                        {!! Form::submit('Nouveau client', array_merge(['class' => 'py-2 px-4 text-white bg-green-500 rounded'])) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>  

        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @forEach($clients as $client)
                            <li>
                                <a href="/client/{{$client->id_client}}">{{ $client ->prenom}} {{ $client ->nom}}
                                </a>
                                <br>
                                <div class="inline-flex mt-2">
                                    <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editClient/{{$client->id_client}}">Modifier</a>
                                    <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteClient/{{$client->id_client}}">Supprimer</a>
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
