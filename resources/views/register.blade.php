@extends('layout')
@section('content')

  <section class="w-full mt-28 text-xl flex items-center flex-col">

    <div class=" w-sm h-sm rounded-full mb-6 bg-gray-50">
      <img src="img/logo.png" alt="logo">
    </div>

    <h1 class=" text-center text-3xl ">Inscrivez-vous</h1>

    <form class="flex flex-col xl:w-5xl xl:px-64 justify-center place-items-center" method="POST" action="/register">
      @csrf {{-- Token check --}}

      <div class="flex flex-col items-start mx-16 my-4">
        <label for="email" class="my-2" >Email</label>
        <div class="input-div">
          <input class="btn-second outline-input" type="email" placeholder="Votre email" name="email" value="{{ old('email') }}" required>
          <span class="focus-border">
                        <i></i>
                    </span>
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="flex flex-col items-start mx-16 my-4">
        <label for="password"class="my-2">Mot de passe</label>
        <div class="input-div">
          <input class="btn-second outline-input" type="password" placeholder="Votre mot de passe" name="password" required>
          <span class="focus-border">
                        <i></i>
                    </span>
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="flex flex-col items-start mx-16 my-4">
        <label for="password-verify"class="my-2" >Confirmer le mot de passe</label>
        <div class="input-div">
          <input class="btn-second outline-input" type="password" placeholder="Votre mot de passe" name="password-verify" required>
          <span class="focus-border">
                        <i></i>
                    </span>
          @error('password-verify')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <button type="submit" class=" my-12 btn-blue">S'inscrire</button>

    </form>

  </section>

@endsection