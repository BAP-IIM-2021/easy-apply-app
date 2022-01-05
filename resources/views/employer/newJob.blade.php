@extends('layout')
@include('partials/header')

@section('content')
@php
$auth_id =  auth()->user()->id;
$company = App\Models\Company::where('id_user', auth()->user()->id)->first();
@endphp


<section class="text-xl">
    <div class="bg-primary flex justify-center text-white items-center py-32">
        <h1 class="text-5xl">Créer un job</h1><br>
    </div>
    <form class="flex flex-col xl:mx-96 items-center" method="POST" action="/employer/new-job">
        @csrf
        <input type="hidden" name="id_company" value="{{$company->id}}">
        <input type="hidden" name="archive_date" value="<?= date('Y-m-d') ?>">
        <div class="flex flex-col xl:flex-row py-10" >
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="label"class="my-2" >Nom</label>
                <input class="btn-primary" type="text" placeholder="Nom" name="label">
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="id_sector"class="my-2 " >Domaine d'activité</label>
                <select name="id_sector" class="btn-primary">
                <option value="">--Sélectionnez l'option--</option>
                @php
                    $sectors = App\Models\Sector::all()
                @endphp
                @foreach ($sectors as $sector)
                    <option value="{{ $sector->id }}">{{ $sector->label }}</option>
                @endforeach
                </select>
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="id_contract_type" class="my-2" >Type de contrat</label>
                <select name="id_contract_type" class="btn-primary text-gray-400">
                    @php
                    $contracts = App\Models\ContractType::all()
                  @endphp
                  @foreach ($contracts as $contract)
                    <option value="{{ $contract->id }}">{{ $contract->label }}</option>
                  @endforeach
                        </select>
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="salary" class="my-2">Salaire</label>
                <input class="btn-primary text-gray-400" type="text" placeholder="Salaire" name="salary">
            </div>
            
        </div>
        
        <div class="flex flex-col xl:flex-row py-10">
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="id_working_mode" class="my-2" >Type de travail</label>
                <select name="id_working_mode" id="" class="btn-primary text-gray-400">
                    @php
                    $works = App\Models\WorkingMode::all()
                    @endphp
                    @foreach ($works as $work)
                        <option value="{{ $work->id }}">{{ $work->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="description" class="my-2">Description</label>
                <textarea class="btn-primary text-gray-400 h-32" type="text" placeholder="Présentez le travail en quelques lignes..." name="description"></textarea>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row py-10">
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="candidate" class="my-2 mx-10">Candidat idéal</label>
                <ul class="flex flex-col xl:flex-row list-decimal">
                    <li>
                        <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                            <option value="">Le Profil</option>
                            <option value="">Les Softs Skills (compétences)</option>
                            <option value="">L'experience professionnelle</option>
                            <option value="">La personalité</option>
                        </select>
                    </li>
                    <li>
                        <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                            <option value="">Le Profil</option>
                            <option value="">Les Softs Skills (compétences)</option>
                            <option value="">L'experience professionnelle</option>
                            <option value="">La personalité</option>
                        </select>
                    </li>
                    <li>
                    <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                        <option value="">Le Profil</option>
                        <option value="">Les Softs Skills (compétences)</option>
                        <option value="">L'experience professionnelle</option>
                        <option value="">La personalité</option>
                    </select>
                    <li>
                        <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                            <option value="">Le Profil</option>
                            <option value="">Les Softs Skills (compétences)</option>
                            <option value="">L'experience professionnelle</option>
                            <option value="">La personalité</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
        <input type="submit" value="Valider" class="w-sm my-12 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">
    </form>
</section>
@endsection
