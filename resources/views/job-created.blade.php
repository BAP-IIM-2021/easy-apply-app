@extends('layout')
@include('partials/header')

@section('content')

  <div class="text-center text-light-blue text-4xl my-14">
    <h1>Proposition d'emploi 1</h1>
  </div>

  <div class="bg-primary h-full xl:h-xl p-10">
    <div class="flex xl:flex-row flex-col justify-center place-items-center xl:justify-evenly my-14">
      <div class="text-center my-4">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
          <h2>496</h2>
        </div>
        <p class="text-white text-2xl xl:mt-5 my-2">Candidatures reçues</p>
      </div>

      <div class="text-center my-4">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
          <h2>234</h2>
        </div>
        <p class="text-white text-2xl xl:mt-5 my-2">Candidatures pertinentes</p>
      </div>

      <div class="text-center my-4">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
          <h2>1</h2>
        </div>
        <p class="text-white text-2xl xl:mt-5 my-2">Emplois créés</p>
      </div>
    </div>
    <p class="text-center text-white text-2xl xl:text-4xl mt-12 xl:mt-24">Date de publication : 4 Décembre 2021</p>
  </div>

  <article class="h-75 m-36">

    <div class="">
      <h3 class="text-light-blue text-3xl xl:text-4xl my-14">Point de description 1</h3>
      <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>
    <div class="">
      <h3 class="text-light-blue text-3xl xl:text-4xl my-14">Point de description 2</h3>
      <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>
    <div class="">
      <h3 class="text-light-blue text-3xl xl:text-4xl my-14">Point de description 3</h3>
      <p class="text-justify text-xl xl:text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>

    <div class="flex flex-col justify-center place-items-center my-14 ">
      <a href="" class="rounded-full border-2 border-light-blue bg-primary text-xl xl:text-2xl text-white py-2 px-5 hover:text-light-blue hover:bg-white hover:border-2 hover:border-light-blue transition duration-150 ease-out hover:ease-in">Proposer un entretien</a>
    </div>

  </article>

@endsection



@extends('layout')
@include('partials/header')

@section('content')


  <div class="bg-primary block text-white p-24 xl:p-24 xl:pb-48 text-center xl:text-left">
    <h1 class="text-5xl my-5">Et si on postulait autrement ?</h1><br>
    <h3 class="text-3xl font-bold my-10 xl:my-3">Favorisons la rencontre entre l'offre et la demande d'emploi</h3>
    <p class="text-white text-xl">Optimisez votre recrutement à moindre coût grâce à notre service tout en un : publications illimitées d’offres, matching et scoring des</p>
    <p class="text-white text-xl">candidats, gestion automatisé des candidatures.</p>
  </div>

  <article class="my-36 ">
    <h2 class="text-center text-6xl xl:mb-32  hover:text-light-blue transition duration-300 ease-out hover:ease-in">Qui sommes-nous ?</h2>

    <div class="flex flex-col justify-center place-items-center my-12 xl:justify-evenly xl:flex-row">
      <div class="flex justify-center my-14 ">
        <iframe class="p-2 w-xl xl:w-2xl h-full xl:h-xl xl:p-0" src="https://www.youtube.com/watch?v=o01l3sotf1Q&list=PLXaH20eIS38afy5jGOV9yRws_UOant1__&index=4"></iframe>
      </div>
      <div class="shadow-md bg-white rounded-lg px-10 py-24 relative m-14">
        <div class="flex justify-center place-items-center rounded-full bg-white shadow-md absolute xl:translate-x-1/3 left-48 xl:left-1/3 -top-24 w-sm h-sm ">
          <img width="170" height="170" class="m-auto" src="./img/logo.png" alt="logo">
        </div>

        <h3 class="uppercase text-center text-3xl font-bold mt-12 ">Easy Apply</h3>
        <p class="text-center">Application de recrutement pas système de matching</p>

        <h4 class="text-primary text-2xl mt-14">Compétences :</h4>
        <p class="mt-5"><span class="font-bold">Offres illimités :</span> les publications d'offres d'emploi sont illimitées</p>
        <p class="mt-5"><span class="font-bold">Visibilité de l'offre :</span> votre offre est proposée aux profils que vous cherchez et à ceux intéressés par vos mission</p>
        <p class="mt-5"><span class="font-bold">Gain de temps :</span> les candidats sont classées automatiquement selon vos critères.</p>
        <p class="mt-5"><span class="font-bold">Économies :</span> un tarif annuel et unique pour l'utilisation complète et illimitée de tous nos services</p>
      </div>
    </div>
  </article>

  <section class="xl:flex xl:flex-row xl:justify-evenly xl:mt-24 flex flex-col justify-center place-items-center">
    <div class="shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">
      <div class="flex rounded-full bg-white shadow-md absolute left-1/3 -top-24 w-sm h-sm">
        <img width="100" height="100" class="m-auto" src="./img/logo.png" alt="logo">
      </div>

      <h3 class="uppercase text-center text-2xl font-bold mt-16">Easy Apply</h3>
      <p class="text-center">Application de recrutement pas système de matching</p>

      <h4 class="text-2xl mt-14">Compétences :</h4>
      <p class="mt-5"><span class="font-bold">Offres illimités :</span> les publications d'offres d'emploi sont illimitées</p>
      <p class="mt-5"><span class="font-bold">Visibilité de l'offre :</span> votre offre est proposée aux profils que vous cherchez et à ceux intéressés par vos mission</p>
      <p class="mt-5"><span class="font-bold">Gain de temps :</span> les candidats sont classées automatiquement selon vos critères.</p>
      <p class="mt-5"><span class="font-bold">Économies :</span> un tarif annuel et unique pour l'utilisation complète et illimitée de tous nos services</p>
    </div>

    <div class="shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">
      <div class="flex rounded-full bg-white shadow-md absolute left-1/3 -top-24 w-sm h-sm">
        <img width="100" height="100" class="m-auto" src="./img/logo.png" alt="logo">
      </div>

      <h3 class="uppercase text-center text-2xl font-bold mt-16">Easy Apply</h3>
      <p class="text-center">Application de recrutement pas système de matching</p>

      <h4 class="text-2xl mt-14">Compétences :</h4>
      <p class="mt-5"><span class="font-bold">Offres illimités :</span> les publications d'offres d'emploi sont illimitées</p>
      <p class="mt-5"><span class="font-bold">Visibilité de l'offre :</span> votre offre est proposée aux profils que vous cherchez et à ceux intéressés par vos mission</p>
      <p class="mt-5"><span class="font-bold">Gain de temps :</span> les candidats sont classées automatiquement selon vos critères.</p>
      <p class="mt-5"><span class="font-bold">Économies :</span> un tarif annuel et unique pour l'utilisation complète et illimitée de tous nos services</p>
    </div>

    <div class="shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">
      <div class="flex rounded-full bg-white shadow-md absolute left-1/3 -top-24 w-sm h-sm">
        <img width="100" height="100" class="m-auto" src="./img/logo.png" alt="logo">
      </div>

      <h3 class="uppercase text-center text-2xl font-bold mt-16">Easy Apply</h3>
      <p class="text-center">Application de recrutement pas système de matching</p>

      <h4 class="text-2xl mt-14">Compétences :</h4>
      <p class="mt-5"><span class="font-bold">Offres illimités :</span> les publications d'offres d'emploi sont illimitées</p>
      <p class="mt-5"><span class="font-bold">Visibilité de l'offre :</span> votre offre est proposée aux profils que vous cherchez et à ceux intéressés par vos mission</p>
      <p class="mt-5"><span class="font-bold">Gain de temps :</span> les candidats sont classées automatiquement selon vos critères.</p>
      <p class="mt-5"><span class="font-bold">Économies :</span> un tarif annuel et unique pour l'utilisation complète et illimitée de tous nos services</p>
    </div>

    <div class="shadow-md hover:shadow-xl bg-white rounded-lg p-10 m-5 relative w-lg my-14 transition duration-300 ease-out hover:ease-in hover:scale-110 hover:bg-primary hover:text-white ">
      <div class="flex rounded-full bg-white shadow-md absolute left-1/3 -top-24 w-sm h-sm">
        <img width="100" height="100" class="m-auto" src="./img/logo.png" alt="logo">
      </div>

      <h3 class="uppercase text-center text-2xl font-bold mt-16">Easy Apply</h3>
      <p class="text-center">Application de recrutement pas système de matching</p>

      <h4 class="text-2xl mt-14">Compétences :</h4>
      <p class="mt-5"><span class="font-bold">Offres illimités :</span> les publications d'offres d'emploi sont illimitées</p>
      <p class="mt-5"><span class="font-bold">Visibilité de l'offre :</span> votre offre est proposée aux profils que vous cherchez et à ceux intéressés par vos mission</p>
      <p class="mt-5"><span class="font-bold">Gain de temps :</span> les candidats sont classées automatiquement selon vos critères.</p>
      <p class="mt-5"><span class="font-bold">Économies :</span> un tarif annuel et unique pour l'utilisation complète et illimitée de tous nos services</p>
    </div>
  </section>

  <article class="bg-primary text-white text-center m-24 xl:m-36 p-10 flex flex-col justify-center place-items-center gap-8">
    <h3 class="xl:text-4xl text-2xl">Vous aimeriez voir votre entreprise sur notre site ?</h3>
    <p class="font-bold xl:text-2xl text-xl">Créez votre page d'entreprise en appuyant simplement ici !</p><br>
    <a href="" class="rounded-full border-2 border-white bg-white text-xl xl:text-2xl text-primary py-2 px-4 hover:text-white hover:bg-primary hover:border-2 hover:border-white transition duration-150 ease-out hover:ease-in">Page d'entreprise</a>
  </article>

@endsection