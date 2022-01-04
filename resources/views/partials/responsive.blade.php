<img src="../img/menu.svg" alt="" class="absolute right-10 top-10 w-xs cursor-pointer transition duration-500 xl:hidden" id="burger">
<div class=" xl:hidden w-base rounded-xl border-light-blue border-2 p-20 text-3xl flex flex-col items-center justify-center fixed right-0 top-0 bg-white translate-x-xl transition duration-500" id='menu-burger'>

    <img src="../img/logo.png" alt="">
    <img src="../img/x.svg" alt="" class="cursor-pointer my-5" id="x">
    <ul class="">
        <a href="/">
            <li class="py-4 hover:bg-light-blue w-base text-center transition">Accueil</li>
        </a>
        <a href="/candidate">
            <li class="py-4 hover:bg-light-blue w-base text-center transition">Candidat</li>
        </a>
        <a href="/employer">
            <li class="py-4 hover:bg-light-blue w-base text-center transition">Entreprise</li>
        </a>
        <a href="/search">
            <li class="py-4 hover:bg-light-blue w-base text-center transition">Recherche</li>
        </a>
        @auth
        <a href="/login">
            <li class="py-4 hover:bg-light-blue w-base text-center transition">Connexion</li>
        </a>
        @else
        <a href="/logout">
            <li class="py-4 hover:bg-light-blue w-base text-center transition">Déconnexion</li>
        </a>
        @endauth
    </ul>
</div>