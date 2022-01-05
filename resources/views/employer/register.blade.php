@extends('layout')
@section('content')

<section class="w-full mt-28 text-xl flex items-center flex-col">

  <div class="w-sm h-sm rounded-full mb-6 bg-gray-50">
    <img src="../img/logo.png" alt="logo">
  </div>

  <h1 class="text-center text-3xl ">Inscrivez-vous</h1>
  <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" method="POST" action="/employer/register">
    @csrf {{-- Token check --}}

    <main class="flex flex-col xl:flex-row">
      <section>
        <div class="flex flex-col items-start mx-16 my-4">
          <label for="company-name"class="my-2" >Nom de l'entreprise</label>
          <div class="input-div">
          <input class="btn-second outline-input" type="text" placeholder="Nom de l'entreprise" name="company_name">
          @error('company_name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
            <span class="focus-border">
              <i></i>
            </span>
          </div>
        </div>

        <div class="flex flex-col items-start mx-16 my-4">
          <label for="adress" class="my-2" >Adresse</label>
          <div class="input-div">
          <input class="btn-second outline-input" type="text" placeholder="Adresse" name="address">
          @error('address')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
          <span class="focus-border">
            <i></i>
          </span>
        </div>
        </div>

        <div id ="container_form" class=" mx-16 mt-4">
          <label for="company-activity" class="my-2">Secteur d'activité</label>
          <div class=" options flex flex-col items-start mt-4">
            <div class="input-div">
            <select class="btn-second outline-input" type="text" name="business_sector_id">
              <option value="">--Sélectionnez l'option--</option>
              @php
                $businessSector = App\Models\BusinessSector::all()
              @endphp
              @foreach ($businessSector as $sector)
                <option value="{{ $sector->id }}">{{ $sector->label }}</option>
              @endforeach
            </select>
            @error('business_sector_id')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
            <span class="focus-border">
            <i></i>
          </span>
          </div>
        </div>

        <div id ="container_form" class="mx-16 mt-4">
          <label for="company-size" class="my-2">Taille de l'entreprise</label>
          <div class=" options flex flex-col items-start mt-4">
            <div class="input-div">
            <select class="btn-second outline-input" type="text" name="company_size_id">
              <option value="">--Sélectionnez l'option--</option>
              @php
                $companySize = App\Models\CompanySize::all()
              @endphp
              @foreach ($companySize as $size)
                <option value="{{ $size->id }}">{{ $size->label }}</option>
              @endforeach
            </select>
            @error('company_size_id')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <span class="focus-border">
            <i></i>
          </span>
          </div>
          </div>
        </div>

      </section>

      <section class="flex flex-col items-start m-auto">

        <div class="flex flex-col items-start mx-16 my-4">
          <label for="img" class="my-4">Logo</label>
          <input type="file" class="max-w-sm xl:max-w-2xl py-24 px-8 dashed-hover bg-white cursor-pointer" name="logo">
          @error('logo')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex flex-col items-start mx-16 my-4">
          <label for="company-desc"class="my-2" >Description de l'entreprise</label>
          <div class="input-div">
          <textarea class="btn-second outline-input w-full " type="text" name="description"> </textarea>
          @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
            <span class="focus-border">
              <i></i>
            </span>
          </div>
        </div>

      </section>
    </main>
    <button type="submit" class="btn-blue cursor-pointer">Créer mon compte</button>

  </form>
  <p>Déjà un compte Easy Apply ? <a href="/login" class="blue-underline text-light-blue">Connexion</a></p>
</section>

@endsection