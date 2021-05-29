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

                        {!! Form::label('id_vehicule', 'Id Véhicule') !!}
                        {!! Form::number('id_vehicule') !!}
                        <br><br>
                        {!! Form::label('id_employe', 'Id Employé') !!}
                        {!! Form::number('id_employe') !!}
                        <br><br>
                        {!! Form::label('id_client', 'Id Client') !!}
                        {!! Form::number('id_client') !!}
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
                            <a href="/contrat/{{$contrat->id_contrat}}">Contract N*:{{ $contrat ->id_contrat}}
                            {{ $contrat->client }} </a>
                            <br/><br/>
                        </li>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
