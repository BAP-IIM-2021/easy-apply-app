@extends('layout')
@include('partials/header')

@section('content')

<div class="bg-primary flex justify-center text-white items-center py-32">
    <h1 class="text-5xl">Créer un travail</h1><br>
</div>
<form class="flex flex-col xl:mx-96 items-center" action="POST">
    <div class="flex flex-col xl:flex-row py-10" >
        <div class="flex flex-col items-start mx-16 my-4">
            <label for="activity"class="my-2" >Domaine d'activité</label>
            <input class="btn-primary" type="text" placeholder="Domaine d'activité" name="activity">
        </div>
        <div class="flex flex-col items-start mx-16 my-4">
            <label for="contract" class="my-2" >Type de contrat</label>
            <input class="btn-primary" type="text" placeholder="Type de contrat" name="contract">
        </div>
        <div class="flex flex-col items-start mx-16 my-4">
            <label for="salary" class="my-2">Salaire</label>
            <input class="btn-primary text-gray-400" type="text" placeholder="Salaire" name="salary">
        </div>
    </div>
    <div class="flex flex-col xl:flex-row py-10">
        <div class="flex flex-col items-start mx-16 my-4">
            <label for="description" class="my-2">Desription</label>
            <textarea class="btn-primary text-gray-400 h-32" type="text" placeholder="Présentez le travail en quelques lignes..." name="description"></textarea>
        </div>
        <div class="flex flex-col items-start mx-16 my-4">
            <label for="goal" class="my-2">Missions</label>
            <textarea class="btn-primary text-gray-400 h-32" type="text" placeholder="Définissez les objectifs à remplir..." name="goal"></textarea>
        </div>
    </div>
    <div class="flex flex-col xl:flex-row py-10">
        <div class="flex flex-col items-start mx-16 my-4">
            <label for="candidate" class="my-2 mx-10">Candidat idéal</label>
            <div class="flex flex-col xl:flex-row">
                <select name="" id="" class="btn-primary text-gray-400 mx-10">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <select name="" id="" class="btn-primary text-gray-400 mx-10">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <select name="" id="" class="btn-primary text-gray-400 mx-10">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <select name="" id="" class="btn-primary text-gray-400 mx-10">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>
</form>
@endsection
