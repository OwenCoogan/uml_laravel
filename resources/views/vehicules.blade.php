<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Véhicules') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ($errors->any())
            <div class="mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <p class="font-bold">Le véhicule n'a pas été créé car les champs n'étaient pas correctement renseignés :</p>
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
                    Ajouter un véhicule
                </button>
                <div class="dashboard__form-add-item hidden p-6 bg-white border-b border-gray-200">

                    {!! Form::open(['url' => 'storeVehicule']) !!}

                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom') !!}
                        <br><br>
                        {!! Form::label('immatriculation', 'Immatriculation') !!}
                        {!! Form::text('immatriculation') !!}
                        <br><br>
                        {!! Form::label('image', 'Image') !!}
                        {!! Form::text('image') !!}
                        <br><br>
                        {!! Form::submit('Nouveau Vehicule') !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @forEach($vehicules as $vehicule)
                            <li>
                                <a href="/vehicule/{{$vehicule->id_vehicule}}" class="underline font-bold">Véhicule N° {{ $vehicule->id_vehicule}}</a>
                                <br>
                                <p class="font-bold mt-1">Aperçu du véhicule</p>
                                <p><span class="font-semibold">Nom :</span> {{ $vehicule->nom }} </p>
                                <p><span class="font-semibold">Immatriculation :</span> {{ $vehicule->immatriculation }} </p>
                                <div class="inline-flex mt-2">
                                    <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editVehicule/{{$vehicule->id_vehicule}}">Modifier</a>
                                    <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteVehicule/{{$vehicule->id_vehicule}}">Supprimer</a>
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
