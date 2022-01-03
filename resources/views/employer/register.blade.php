@extends('layout')
@section('content')

<section class="w-full mt-28 text-xl flex items-center flex-col bg-red-100">

  <div class="w-sm h-sm rounded-full mb-6 bg-gray-50">
    <img src="img/logo.png" alt="logo">
  </div>

  <h1 class="text-center text-3xl ">Inscrivez-vous</h1>
  <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" action="POST">
    <main class="flex flex-col xl:flex-row">
      <section>
        <div class="flex flex-col items-start mx-16 my-4">
          <label for="company-name"class="my-2" >Nom de l'entreprise</label>
          <input class="btn-primary" type="text" placeholder="Nom de l'entreprise" name="company-name">
        </div>

        <div class="flex flex-col items-start mx-16 my-4">
          <label for="adress" class="my-2" >Adresse</label>
          <input class="btn-primary" type="text" placeholder="Adresse" name="adress">
        </div>
  
        <div id ="container_form" class=" mx-16 mt-4">
          <label for="company-activity" class="my-2">Secteur d'activité</label>
          <div class=" options flex flex-col items-start mt-4">
            <select class="btn-primary" type="text" name="company-activity"> 
              <option value="">--Sélectionnez l'option--</option>
              {{-- TODO: foreach option --}}
            </select>
          </div>
        </div>
  
        <div id ="container_form" class="mx-16 mt-4">
          <label for="company-size" class="my-2">Taille de l'entreprise</label>
          <div class=" options flex flex-col items-start mt-4">
            <select class="btn-primary" type="text" name="company-size"> 
              <option value="">--Sélectionnez l'option--</option>
              {{-- TODO: foreach option --}}
            </select>
          </div>
        </div>
  
      </section>
  
      <section class="flex flex-col items-start m-auto">
        <div class="flex flex-col items-start mx-16 my-4"> 
          <label for="img" class="my-4">Logo</label>
          <input type="file" class="max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white" name="img">
        </div>  
        <div class="flex flex-col items-start mx-16 my-4">
          <label for="company-desc"class="my-2" >Description de l'entreprise</label>
          <textarea class="btn-primary w-full " type="text" name="company-desc"> </textarea>
        </div>
      </section>
    </main>

    <input type="submit" value="Inscription"class="w-sm my-12 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">

  </form>
  <p>Déjà un compte Easy Apply ? <a href="/login" class=" text-light-blue">Connexion</a></p>
</section>

@endsection