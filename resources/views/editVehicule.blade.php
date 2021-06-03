<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retours</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le Véhicule N°') }} {{$vehicule->id_vehicule}}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ($errors->any())
            <div class="mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <p class="font-bold">Le véhicule n'a pas été modifié car les champs n'étaient pas correctement renseignés :</p>
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
                    {!! Form::open(['url' => 'updateVehicule/'.$vehicule->id_vehicule]) !!}

                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom', $vehicule->nom) !!}
                        <br><br>
                        {!! Form::label('immatriculation', 'Immatriculation') !!}
                        {!! Form::text('immatriculation', $vehicule->immatriculation) !!}
                        <br><br>
                        {!! Form::label('image', 'Image') !!}
                        {!! Form::text('image', $vehicule->image) !!}
                        <br><br>
                        {!! Form::submit('Modifier le Vehicule') !!}

                    {!! Form::close() !!}
                </div>


                <div class="dashboard__form-edit-item p-6 bg-white border-b border-gray-200">
                <h2 style="font-size:26px;margin-bottom:50px">Ajouter un point de contrôle</h2>
                    {!! Form::open(['url' => 'addControle/'.$vehicule->id_vehicule]) !!}
                    @if (!empty($contrat->employe))
                        {!! Form::label('id_vehicule', 'Vehicule') !!}
                        {!! Form::hidden('id_vehicule', $vehicule ->id_vehicule) !!}

                        {!! Form::label('controle_type', 'Type de Controle') !!}
                        {!! Form::text('controle_type', $vehicule ->pointControle->controle_type ) !!}
                        <br><br>
                        {!! Form::label('controle_description', 'Description de Controle') !!}
                        {!! Form::text('controle_description', $vehicule ->pointControle ->controle_description) !!}
                        <br><br>
                        {!! Form::label('id_employe', 'Id employé') !!}
                        {!! Form::text('id_employe', $vehicule ->pointControle ->id_employe) !!}
                        <br><br>
                        {!! Form::submit('Ajouter point de contrôle:') !!}
                    @endif


                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
