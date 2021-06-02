<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un Vehicule N°') }} {{$vehicule->id_vehicule}}
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
                        {!! Form::label('image', 'Image') !!}
                        {!! Form::text('image', $vehicule->image) !!}

                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom', $vehicule->nom) !!}
                        {!! Form::label('id_controle', 'Controle') !!}
                        {!! Form::selectRange('number','id_controle',  $vehicule->id_controle) !!}
                        <br><br>
                        {!! Form::submit('Modifier le Vehicule') !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
