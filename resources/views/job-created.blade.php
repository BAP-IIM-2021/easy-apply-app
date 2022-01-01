@extends('layout')
@include('partials/header')

@section('content')

  <div class="text-center text-light-blue text-4xl my-14">
    <h1>Proposition d'emploi 1</h1>
  </div>

  <div class="bg-primary h-lg p-10">
    <div class="flex justify-evenly">
      <div class="text-center">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white text-6xl w-base h-sm ">
          <h2>496</h2>
        </div>
        <p class="text-white text-4xl mt-5">Candidatures reçues</p>
      </div>

      <div class="text-center">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white text-6xl  w-base h-sm">
          <h2>234</h2>
        </div>
        <p class="text-white text-4xl mt-5">Candidatures pertinentes</p>
      </div>

      <div class="text-center">
        <div class="flex flex-col justify-center text-center rounded-2xl bg-white text-6xl  w-base h-sm">
          <h2>1  </h2>
        </div>
        <p class="text-white text-4xl mt-5">Emplois créés</p>
      </div>
    </div>
    <p class="text-center text-white text-4xl mt-24">Date de publication : 4 Décembre 2021</p>
  </div>

  <article class="h-75 m-36">

    <div class="border-b-2 border-black">
      <h3 class="text-light-blue text-4xl my-14">Point de description 1</h3>
      <p class="text-justify text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>
    <div class="border">
      <h3 class="text-light-blue text-4xl my-14">Point de description 2</h3>
      <p class="text-justify text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>
    <div class="border">
      <h3 class="text-light-blue text-4xl my-14">Point de description 3</h3>
      <p class="text-justify text-2xl" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae lectus vel metus gravida laoreet. Mauris egestas placerat velit tristique ornare. Nulla malesuada felis at mi mattis dapibus eu non lorem. Nulla rhoncus mauris a nunc ornare, eu posuere nibh efficitur. Nam sed ante fringilla, auctor mi vel, luctus erat. Suspendisse potenti. In ultricies posuere ornare. Quisque luctus arcu nulla, id rhoncus diam volutpat eu. In laoreet dictum ligula ut posuere. Aliquam tristique tellus et dapibus fermentum.</p>
    </div>

    <div class="flex flex-col justify-center place-items-center m-36">
      <a href="" class="rounded-full border-2 border-light-blue bg-primary text-xl text-white py-2 px-4">Proposer un entretien</a>
    </div>

  </article>

@endsection
