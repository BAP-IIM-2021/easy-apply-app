@extends('layout')
@section('content')

<section class="w-full mt-28 text-xl flex items-center flex-col">

  <div class=" w-sm h-sm rounded-full mb-6 bg-gray-50">
    <img src="img/logo.png" alt="logo">
  </div>

  <h1 class=" text-center text-3xl ">Inscrivez-vous</h1>

  <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" action="POST">

    <div class="flex flex-col items-start mx-16 my-4">
      <label for="email"class="my-2" >Email</label>
      <input class="btn-primary" type="text" placeholder="Votre email" name="email">
    </div>

    <div class="flex flex-col items-start mx-16 my-4">
      <label for="password"class="my-2" >Mot de passe</label>
      <input class="btn-primary" type="text" placeholder="Votre mot de passe" name="password">
    </div>

    <div class="flex flex-col items-start mx-16 my-4">
      <label for="password-verify"class="my-2" >Confirmer le mot de passe</label>
      <input class="btn-primary" type="text" placeholder="Votre mot de passe" name="password-verify">
    </div>

    <input type="submit" value="Inscription"class="w-sm my-12 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">

  </form>

</section>

@endsection