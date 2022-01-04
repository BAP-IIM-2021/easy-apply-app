@extends('layout')
@include('partials/header')

@section('content')


    <section class="bg-gray flex justify-center h-100 ">
        <img src="../img/add-pic.svg" alt="add pic" class="my-36">
    </section>

    <article class="flex flex-col justify-evenly m-14 place-items-center xl:flex xl:flex-row xl:justify-around">
        <div class="flex flex-col justify-between place-items-center">

            <div class="flex flex-row my-10">
                <h2 class="font-title text-4xl mx-10">Clémentine PUNTELLE, 28/06/1983</h2>
                <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
            </div>
            <h3 class="text-3xl">Étudiante en biologie - Université de Nantes</h3>
            <h3 class="text-3xl text-gray">Nantes, Pays de la Loire, France.</h3>

        </div>

        <div class="flex flex-col justify-center my-10">
            <img src="../img/logo.png" alt="overwrite" class="w-sm h-sm">
            <h3 class="text-3xl">Université de Nantes</h3>
        </div>


    </article>


    <article class="">

        <div class="flex flex-row justify-center place-items-center">
            <h2 class="text-light-blue font-title mx-3 text-4xl">Coordonnées</h2>
            <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
        </div>


            <div class="flex xl:flex-row flex-col xl:justify-between items-center xl:mx-64 my-14" >

                <div class=" flex flex-col text-center xl:text-left">
                    <div class="flex items-center mb-2">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">06.00.00.00.00</p>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <img src="../img/footer/contact_email.svg" class="w-xxs">
                        <a href="mailto: project@easyapply.fr" class="link link-underline text-2xl mx-4">
                            clementine.puntelle@exemple.com
                        </a>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">http://www.clementine-puntelle.tk/</p>
                    </div>
                </div>

                <div class=" flex flex-col text-center xl:text-left">
                    <div class="flex items-center mb-2">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">clém_puntelle</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">Clémentine Puntelle</p>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">A123456*</p>
                    </div>
                </div>

                <div class=" flex flex-col text-center xl:text-left">
                    <div class="flex items-center mb-2">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">clém_puntelle</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <img src="../img/footer/contact_phone.svg" class="w-xxs">
                        <p class="text-2xl mx-4">Clémentine Puntelle</p>
                    </div>
                </div>
            </div>
    </div>
    </article>


    <div class="flex flex-row justify-center place-items-center">
        <h2 class="text-light-blue font-title mx-3 text-4xl">Formation</h2>
        <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
    </div>

    <section class="xl:flex xl:flex-row xl:justify-evenly xl:mt-24 flex flex-col justify-center place-items-center">
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