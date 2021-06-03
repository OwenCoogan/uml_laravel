<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retours</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le Client N°') }} {{$client->id_client}}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ($errors->any())
            <div class="mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <p class="font-bold">Le client n'a pas été modifié car les champs n'étaient pas correctement renseignés :</p>
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
                    {!! Form::open(['url' => 'updateClient/'.$client->id_client]) !!}

                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom', $client->nom) !!}
                        <br><br>
                        {!! Form::label('prenom', 'Prénom') !!}
                        {!! Form::text('prenom', $client->prenom) !!}
                        <br><br>
                        {!! Form::label('date_naissance', 'Date de naissance') !!}
                        {!! Form::date('date_naissance', \Carbon\Carbon::parse($client->date_naissance)->format('Y-m-d')) !!}
                        <br><br>
                        {!! Form::label('numero_permis', 'N° de permis') !!}
                        {!! Form::number('numero_permis', $client->numero_permis) !!}
                        <br><br>
                        {!! Form::submit('Modifier le Client', array_merge(['class' => 'py-2 px-4 text-white bg-green-500 rounded'])) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
