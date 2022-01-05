@extends('layout')

@section('content')
    <section class=" mt-28 text-xl flex items-center flex-col ">
        <div class=" w-sm h-sm rounded-full mb-6 bg-gray-50">
            <img src="img/logo.png" alt="logo">
        </div>
        <h1 class="font-title text-center text-3xl ">Connectez-vous</h1>
        <form class="flex flex-col xl:w-5xl xl:px-64 items-center" method="POST" action="/login">
            @csrf
            <div id="content_inscription_1" class="flex justify-center items-center h-base ">
                <div class="flex flex-col" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="mail" class="my-2">E-mail</label>
                        <div class="input-div">
                            <input class="btn-second outline-input"type="email" placeholder="Adresse mail" name="email">
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

                    <div class="flex mx-16 mb-4 justify-end ">
                        <a href='#'>
                            <label for="password" class="my-2 text-lg cursor-pointer hover:text-blue-400" >Mot de passe oublié ?</label>
                        </a>
                    </div>
                    <div class="flex mx-16 mb-4">
                        <input type="checkbox" id="remember" name="remember" class=" cursor-pointer">
                        <label for="remember" class="mx-2">Se souvenir de moi</label>
                    </div>
                </div>
            </div>
            <div id="login" class="flex-col">
                <button type="submit" class="mb-20 btn-blue">Connexion</button>
            </div>
            <p>Nouveau sur Easy Apply ? <a href="/candidate/register" class="blue-underline text-light-blue font-bold">S'inscrire</a></p>
        </form>
    </section>

@endsection