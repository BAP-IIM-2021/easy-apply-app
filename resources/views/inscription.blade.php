@extends('layout')

@section('content')
    <section class=" mt-28 text-xl flex items-center flex-col ">
        <div class=" w-sm h-sm rounded-full mb-6 bg-gray-50">
            <img src="img/logo.png" alt="logo">
        </div>
        <h1 class="font-title text-center text-3xl ">Inscrivez-vous</h1>
        <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" action="POST">
            <div id="content_inscription_1" class="flex xl:flex-row flex-col justify-center items-center xl:h-xl">
                <div class="flex flex-wrap" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="last_name"class="my-2" >Nom</label>
                        <input class="btn-primary" type="text" placeholder="Nom" name="last_name">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="first_name" class="my-2" >Prénom</label>
                        <input class="btn-primary" type="text" placeholder="Prénom" name="first_name">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="birth_date" class="my-2">Date de naissance</label>
                        <input class="btn-primary text-gray-400" type="date" placeholder="Date de Naissance" name="birth_date">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="city" class="my-2">Ville</label>
                        <input class="btn-primary" type="text" placeholder="Ville" name="city">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="mail" class="my-2">E-mail</label>
                        <input class="btn-primary" type="email" placeholder="Adresse mail" name="mail">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="phone" class="my-2">Numéro</label>
                        <input class="btn-primary" type="tel" placeholder="Numéro" name="phone">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="password" class="my-2" >Mot de passe</label>
                        <input class="btn-primary" type="password" placeholder="Mot de passe" name="password">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="password_valid" class="my-2" >Validation mot de passe</label>
                        <input class="btn-primary" type="password" placeholder="Validation du mot de passe" name="password_valid">
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="img" class="my-4">Photo</label>
                        <input type="file" class=" max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="img">
                    </div>
                </div>
            </div>


            <div id="content_inscription_2" class="xl:flex-row flex-col justify-center items-center hidden bg">
                <div class="flex flex-wrap" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="website"class="my-2" >Site Internet</label>
                        <input class="btn-primary" type="url" placeholder="Site web" name="website">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="linkedIn" class="my-2" >LinkedIn</label>
                        <input class="btn-primary" type="text" placeholder="LinkedIn" name="linkedIn">
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="experience" class="my-2">Expériences</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="experience"> 
                            <option value="">--Sélectionnez l'option--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div id="ss_container" class=" mx-16 mt-4">
                        <label for="soft_skills">Soft Skills</label>
                        <div id="ss_content">
                            <div id="ss" class="flex flex-col items-start mt-4">
                                <select class="btn-primary" type="text" placeholder="Site" name="soft_skills"> 
                                    <option value="">--Sélectionnez l'option--</option>
                                    <option value="">La prise de décision</option>
                                    <option value="">La délégation</option>
                                    <option value="">La facilitation</option>
                                    <option value="">La supervision</option>
                                    <option value="">Savoir écouter</option>
                                    <option value="">Convaincre</option>
                                    <option value="">Persuader</option>
                                    <option value="">Négocier</option>
                                    <option value="">Argumenter</option>
                                    <option value="">Présenter</option>
                                    <option value="">L'audace</option>
                                    <option value="">L'autonomie</option>
                                    <option value="">La curiosité</option>
                                    <option value="">La mémoire</option>
                                    <option value="">Le respect</option>
                                    <option value="">La respectabilité</option>
                                    <option value="">La présentation</option>
                                    <option value="">L'intelligence culturelle</option>
                                    <option value="">La présence</option>
                                    <option value="">La conscience de soi</option>
                                    <option value="">L'introspection</option>
                                    <option value="">La maîtrise de soi</option>
                                    <option value="">L'observation critique</option>
                                    <option value="">La pensée critique</option>
                                    <option value="">La pensée logique</option>
                                    <option value="">La rigueur</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="experience_years" class="my-2">Année d'expériences</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="experience_years"> 
                            <option value="">--Sélectionnez l'option--</option>
                            
                        </select>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="formation" class="my-2">Formation</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="formation"> 
                            <option value="">--Sélectionnez l'option--</option>
                            <option value="">Agriculture</option>
                            <option value="">Animation</option>
                            <option value="">Animation 2D/3D</option>
                            <option value="">Art</option>
                            <option value="">Beauté</option>
                            <option value="">Bien-être</option>
                            <option value="">Commerce</option>
                            <option value="">Communication</option>
                            <option value="">Comptabilité</option>
                            <option value="">Culture</option>
                            <option value="">Design</option>
                            <option value="">Droit</option>
                            <option value="">Environnement</option>
                            <option value="">Finance</option>
                            <option value="">Fonction publique</option>
                            <option value="">Hôtellerie</option>
                            <option value="">Image</option>
                            <option value="">Informatique</option>
                            <option value="">Ingénierie</option>
                            <option value="">Langues</option>
                            <option value="">Management</option>
                            <option value="">Marketing</option>
                            <option value="">Mode</option>
                            <option value="">Santé</option>
                            <option value="">Sciences</option>
                            <option value="">Sciences Humaines</option>
                            <option value="">Sciences Politiques</option>
                            <option value="">Sport</option>
                            <option value="">Social</option>
                            <option value="">Son</option>
                            <option value="">Tourisme</option>
                        </select>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="diploma" class="my-2" >Diplômes</label>
                        <textarea class="btn-primary resize-none" placeholder="Diplômes" name="diploma"></textarea>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="img" class="my-4">CV</label>
                        <input type="file" class=" max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="img">
                    </div>
                </div>
            </div>
            
            <a id="next_inscription" class=" w-sm my-12 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">Suivant </a>
            <div id="submit_inscription" class=" hidden flex-col">
                <input type="submit" value="Inscription"class=" w-sm mt-12 mb-1 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">
                <a id="back_inscription" class=" w-sm cursor-pointer text-gray-500 text-center mb-4 hover:text-black">Retour </a>
            </div>
                <p>Déjà un compte Easy Apply ? <a href="{{ route ('login') }}" class=" text-light-blue font-bold">Connexion</a></p>
        </form>
    </section>
</body>

    @endsection
    