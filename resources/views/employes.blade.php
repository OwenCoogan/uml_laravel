<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard__wrap-add-item bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <button class="dashboard__btn-add-item outline-none w-full p-6 bg-white border-b border-gray-200">
                    Ajouter un employé
                </button>
                <div class="dashboard__form-add-item hidden p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['url' => 'storeEmploye']) !!}

                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom') !!}
                        <br><br>
                        {!! Form::label('fonction', 'Fonction') !!}
                        {!! Form::text('fonction') !!}
                        <br><br>
                        {!! Form::submit('Nouveau Employe', array_merge(['class' => 'py-2 px-4 text-white bg-green-500 rounded'])) !!}</span>

                    {!! Form::close() !!}
                </div>
            </div>
        </div> 

        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <ul>
                    @forEach($employes as $employe)
                        <li>
                            <a href="/employe/{{$employe->id_employe}}" class="underline font-bold">Employé N° {{ $employe ->id_employe}}
                                </a>
                            <br/>
                            <p><span class="font-semibold">Nom :</span> {{ $employe ->nom}}</p>
                        
                            <div class="inline-flex mt-2">
                                <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editEmploye/{{$employe->id_employe}}">Modifier</a>
                                <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteEmploye/{{$employe->id_employe}}">Supprimer</a>
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
