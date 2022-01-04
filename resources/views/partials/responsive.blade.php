<img src="../img/menu.svg" alt="" class="fixed right-10 top-10 w-xs cursor-pointer transition duration-500 xl:hidden" id="burger">
<div class=" xl:hidden w-base h-full rounded-xl p-20 text-3xl flex flex-col items-center fixed right-0 top-0 bg-white translate-x-xl transition duration-500 shadow-2xl" id='menu-burger'>
    <img src="../img/logo.png" alt="">
    <img src="../img/x.svg" alt="" class="cursor-pointer my-5 w-14" id="x">
    <ul class="">
        <a href="/">
            <li class="py-4 hover:bg-slate-200 w-base text-center transition">Accueil</li>
        </a>
        <a href="/candidate">
            <li class="py-4 hover:bg-slate-200 w-base text-center transition">Candidat</li>
        </a>
        <a href="/employer">
            <li class="py-4 hover:bg-slate-200 w-base text-center transition">Entreprise</li>
        </a>
        <a href="/search">
            <li class="py-4 hover:bg-slate-200 w-base text-center transition">Recherche</li>
        </a>
        @auth
        <form method="POST" action="/logout" class="flex justify-center py-10">
            @csrf<button type="submit" class=" text-center mx-20 rounded-full border-2 border-primary bg-primary text-white py-3 px-6 hover:text-primary hover:bg-white transition duration-150 ease-out hover:ease-in" >Déconnexion</button></form>
      

        </a>
        @else
        <a href="/login" class="flex justify-center py-10">
            <li class=" text-center mx-20 rounded-full border-2 border-primary bg-primary text-white py-3 px-6 hover:text-primary hover:bg-white transition duration-150 ease-out hover:ease-in">Connexion</li>
        </a>
        
        @endauth
    </ul>
</div>
{{-- py-10 hover:bg-slate-200 text-center transition --}}