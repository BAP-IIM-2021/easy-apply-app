@extends('layout')
@include('partials/header')

@section('content')


    <section class="bg-gray flex justify-center h-100 relative">
        <img src="../img/add-pic.svg" alt="add pic" class="my-60">
        <div class="flex rounded-full bg-white shadow-md absolute justify-center xl:left-[10%] bottom-[-30%] xl:bottom-[-40%] w-tiny h-tiny xl:w-lg xl:h-lg">
            <a href="" class="m-auto"><img width="50" height="50"  src="../img/add-pic.svg" alt="logo"></a>
        </div>
    </section>

    <article class="flex flex-col justify-evenly mx-14 mt-56 mb-20 place-items-center xl:flex xl:flex-row xl:justify-around xl:text-left ">
        <div class="flex flex-col text-center xl:justify-between place-items-center ">

            <div class="flex flex-row my-10">
                <h2 class="font-title text-3xl xl:text-4xl mx-2 xl:mx-10">Clémentine PUNTELLE, 28/06/1983</h2>
                <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
            </div>
            <h3 class="text-2xl xl:text-3xl">Étudiante en biologie - Université de Nantes</h3>
            <h3 class="text-2xl xl:text-3xl">Nantes, Pays de la Loire, France.</h3>

        </div>

        <div class="flex flex-row justify-center my-10">
            <img src="../img/u-nantes.svg" alt="logo université" width="50" class="mx-4">
            <h3 class="text-2xl xl:text-3xl flex flex-col justify-center">Université de Nantes</h3>
        </div>



    </article>


    <article class="my-14">

        <div class="flex flex-row justify-center place-items-center">
            <h2 class="text-light-blue font-title mx-3 text-4xl">Coordonnées</h2>
            <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
        </div>


            <div class="flex xl:flex-row flex-col xl:justify-around ml-16 xl:items-center xl:mx-64 my-14" >

                <div class=" flex flex-col xl:text-left">
                    <div class="flex items-center mb-2 ">
                        <i class="fas fa-phone-square-alt fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">06.00.00.00.00</p>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <i class="fas fa-envelope fa-2x"></i>
                        <a href="mailto: project@easyapply.fr" class="link link-underline text-xl xl:text-2xl mx-4">
                            clementine.puntelle@exemple.com
                        </a>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <i class="fab fa-internet-explorer fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">http://www.clementine-puntelle.tk/</p>
                    </div>
                </div>

                <div class=" flex flex-col xl:text-left">
                    <div class="flex items-center mb-2">
                        <i class="fab fa-instagram fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">clém_puntelle</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">Clémentine Puntelle</p>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <i class="fas fa-lock fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">A123456*</p>
                    </div>
                </div>

                <div class=" flex flex-col xl:text-left">
                    <div class="flex items-center mb-2">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">clém_puntelle</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fab fa-linkedin fa-2x"></i>
                        <p class="text-xl xl:text-2xl mx-4">Clémentine Puntelle</p>
                    </div>
                </div>
            </div>
    </div>
    </article>


    <div class="flex flex-row justify-center place-items-center mt-20">
        <h2 class="text-light-blue font-title mx-3 text-2xl xl:text-3xl">Formation</h2>
        <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
    </div>

    <section class="xl:flex xl:flex-row xl:justify-evenly xl:mt-14 flex flex-col justify-center place-items-center">
        <div class="flex flex-col items-start">
            <label for="img" class="my-4">CV</label>

            <div class="dashed-hover py-20 px-20 bg-white ">
                <input id="file-input" type="file" class="hidden" name="pdf">
                <label for="file-input"><img width="50" height="50" class="m-auto cursor-pointer"  src="../img/add-pic.svg" alt="logo"></label>
            </div>


        </div>

        <div class="highlight shadow-md hover:shadow-xl bg-white rounded-3xl p-10 m-5 relative w-lg my-14">

            <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
            <p class="text-center">De mai 2020 à juillet 2020</p>

            <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                dans le 5ème arrondissement de Paris.
            </p><br>
            <p class="text-xl mt-5">- approvisionnement des stocks</p>
            <p class="text-xl mt-5">- conseil des clients</p>
            <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
        </div>

        <div class="highlight shadow-md hover:shadow-xl bg-white rounded-3xl p-10 m-5 relative w-lg my-14">

            <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
            <p class="text-center">De mai 2020 à juillet 2020</p>

            <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                dans le 5ème arrondissement de Paris.
            </p><br>
            <p class="text-xl mt-5">- approvisionnement des stocks</p>
            <p class="text-xl mt-5">- conseil des clients</p>
            <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
        </div>

        <div class="highlight shadow-md hover:shadow-xl bg-white rounded-3xl p-10 m-5 relative w-lg my-14">

            <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
            <p class="text-center">De mai 2020 à juillet 2020</p>

            <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                dans le 5ème arrondissement de Paris.
            </p><br>
            <p class="text-xl mt-5">- approvisionnement des stocks</p>
            <p class="text-xl mt-5">- conseil des clients</p>
            <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
        </div>


    </section>
@endsection






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
                        <div class="input-div">
                            <input class="btn-second outline-input" type="text" placeholder="Nom" name="last_name">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="first_name" class="my-2" >Prénom</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="text" placeholder="Prénom" name="first_name">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="birth_date" class="my-2">Date de naissance</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="date" placeholder="Date de Naissance" name="birth_date">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="city" class="my-2">Ville</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="text" placeholder="Ville" name="city">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="mail" class="my-2">E-mail</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="email" placeholder="Adresse mail" name="mail">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="phone" class="my-2">Numéro</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="tel" placeholder="Numéro" name="phone">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="password" class="my-2" >Mot de passe</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="password" placeholder="Mot de passe" name="password">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="password_valid" class="my-2" >Validation mot de passe</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="password" placeholder="Validation du mot de passe" name="password_valid">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="img" class="my-4">Photo</label>
                        <input type="file" class=" py-24 px-8 dashed-hover bg-white cursor-pointer " name="img">
                    </div>
                </div>
            </div>

            <div id="content_inscription_2" class="xl:flex-row flex-col justify-center items-center hidden bg">
                <div class="flex flex-wrap" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="website"class="my-2" >Site Internet</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="url" placeholder="Site web" name="website">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="linkedIn" class="my-2" >LinkedIn</label>
                        <div class="input-div">
                            <input class="btn-second outline-input" type="text" placeholder="LinkedIn" name="linkedIn">
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>

                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="experience" class="my-2">Expériences</label>
                        <div class="input-div">
                            <select class="btn-second outline-input" type="text" placeholder="Site" name="experience">
                                <option value="">--Sélectionnez l'option--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <span class="focus-border">
                            <i></i>
                            </span>
                        </div>
                    </div>
                    <div id="ss_container" class=" mx-16 mt-4">
                        <label for="soft_skills">Soft Skills</label>
                        <div id="ss_content">
                            <div id="ss" class="flex flex-col items-start mt-4 input-div">
                                <select class="btn-second outline-input" type="text" placeholder="Site" name="soft_skills">
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
                                <span class="focus-border">
                                <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="experience_years" class="my-2">Année d'expériences</label>
                        <div class="input-div">

                            <select class="btn-second outline-input" type="text" placeholder="Site" name="experience_years">
                                <option value="">--Sélectionnez l'option--</option>
                            </select>
                            <span class="focus-border">
                            <i></i>
                            </span>
                        </div>

                    </div>

                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="formation" class="my-2">Formation</label>
                        <div class="input-div">
                            <select class="btn-second outline-input" type="text" placeholder="Site" name="formation">
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
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="diploma" class="my-2" >Diplômes</label>
                        <div class="input-div">
                            <textarea class="btn-second outline-input resize-none" placeholder="Diplômes" name="diploma"></textarea>
                            <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="img" class="my-4">CV</label>
                        <input type="file" class=" py-24 px-8 dashed-hover bg-white cursor-pointer " name="img">
                    </div>
                </div>
            </div>

            <a id="next_inscription" class="btn-blue cursor-pointer">Suivant </a>
            <div id="submit_inscription" class=" flex hidden flex-col justify-center place-items-center">
                <input type="submit" value="Inscription"class=" cursor-pointer btn-blue">
                <a id="back_inscription" class=" w-sm cursor-pointer text-light-blue text-center mb-4 hover:text-gray">Retour </a>
            </div>
            <p>Déjà un compte Easy Apply ? <a href="" class="blue-underline text-light-blue font-bold">Connexion</a></p>
        </form>
    </section>
    </body>

@endsection

