@extends('layout')
@include('partials/header')

@section('content')

    <section class="text-xl">
        <div class="bg-primary flex justify-center text-white items-center py-32">
            <h1 class="text-5xl">Créer un travail</h1><br>
        </div>
        <form class="flex flex-col xl:mx-96 items-center" action="POST">
            <div class="flex flex-col xl:flex-row py-10" >
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="activity"class="my-2 " >Domaine d'activité</label>
                    <div class="input-div">
                        <input class="btn-second outline-input" type="text" placeholder="Domaine d'activité" name="activity">
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="contract" class="my-2" >Type de contrat</label>
                    <div class="input-div">
                    <select name="contract" id="" class="btn-second text-gray-400 outline-input">
                        <option value="">CDI</option>
                        <option value="">CDD</option>
                        <option value="">ETT</option>
                        <option value="">Intérim</option>
                        <option value="">Stage</option>
                        <option value="">Alternance</option>
                        <option value="">Apprentissage</option>
                    </select>
                        <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                </div>
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="salary" class="my-2">Salaire</label>
                    <div class="input-div">
                    <input class="btn-second text-gray-400 outline-input" type="text" placeholder="Salaire" name="salary">
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col xl:flex-row py-10">
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="description" class="my-2">Description</label>

                    <div class="input-div">
                        <textarea class="btn-second text-gray-400 outline-input text-gray-400 h-32" type="text" placeholder="Présentez le travail en quelques lignes..." name="description"></textarea>
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>

                </div>
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="goal" class="my-2">Missions</label>
                    <div class="input-div">
                    <textarea class="btn-second text-gray-400 outline-input h-32" type="text" placeholder="Définissez les objectifs à remplir..." name="goal"></textarea>
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col xl:flex-row py-10">
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="candidate" class="my-2 mx-10">Candidat idéal</label>
                    <ul class="flex flex-col xl:flex-row list-decimal">
                        <li class="mx-2">
                            <div class="input-div my-5 mx-10">
                                <select name="candidate" id="" class="btn-second outline-input text-gray-400 ">
                                    <option value="">Le Profil</option>
                                    <option value="">Les Softs Skills (compétences)</option>
                                    <option value="">L'experience professionnelle</option>
                                    <option value="">La personalité</option>
                                </select>
                                <span class="focus-border">
                                <i></i>
                                </span>
                            </div>
                        </li>
                        <li class="mx-2">
                            <div class="input-div my-5 mx-10">
                                <select name="candidate" id="" class="btn-second outline-input text-gray-400 ">
                                    <option value="">Le Profil</option>
                                    <option value="">Les Softs Skills (compétences)</option>
                                    <option value="">L'experience professionnelle</option>
                                    <option value="">La personalité</option>
                                </select>
                                <span class="focus-border">
                                <i></i>
                                </span>
                            </div>
                        </li>
                        <li class="mx-2">
                            <div class="input-div my-5 mx-10">
                                <select name="candidate" id="" class="btn-second outline-input text-gray-400 ">
                                    <option value="">Le Profil</option>
                                    <option value="">Les Softs Skills (compétences)</option>
                                    <option value="">L'experience professionnelle</option>
                                    <option value="">La personalité</option>
                                </select>
                                <span class="focus-border">
                                <i></i>
                                </span>
                            </div>
                        </li>
                        <li class="mx-2">
                            <div class="input-div my-5 mx-10">
                                <select name="candidate" id="" class="btn-second outline-input text-gray-400 ">
                                    <option value="">Le Profil</option>
                                    <option value="">Les Softs Skills (compétences)</option>
                                    <option value="">L'experience professionnelle</option>
                                    <option value="">La personalité</option>
                                </select>
                                <span class="focus-border">
                                <i></i>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <input type="submit" value="Valider" class="my-12 btn-blue cursor-pointer">
        </form>
    </section>
@endsection