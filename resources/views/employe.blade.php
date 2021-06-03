<x-app-layout>
    <x-slot name="header">
        <a class="py-2 px-4 rounded border-2 border-gray-800 hover:bg-gray-800 hover:text-white transition duration-150 ease-in-out" href="{{ url()->previous() }}">Retour</a>
        <br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Employé N° {{ $employe ->id_employe}}
            <br>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 vehicule">
                    <p><span class="font-semibold">Nom :</span> {{$employe->nom }}</p>
                    <p><span class="font-semibold">Poste :</span> {{$employe->fonction }}</p>
                    <div class="inline-flex mt-2">
                        <a class="py-2 px-4 text-white bg-yellow-500 rounded" href="/editEmploye/{{$employe->id_employe}}">Modifier</a>
                        <a class="py-2 px-4 text-white bg-red-600 rounded ml-2" href="/deleteEmploye/{{$employe->id_employe}}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


