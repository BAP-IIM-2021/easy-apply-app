<header class="w-full bg-white hidden xl:flex items-center justify-between px-10">
  <div class="w-1/2">
    <a href="/"><img src="../img/logo.png" alt="logo" class="h-medium"></a>
  </div>
  @auth
    <ul class="flex justify-evenly xl:w-1/2 items-center">
      <li>
        <a href="/" class="text-xl hover:text-light-blue transition duration-300 ease-out hover:ease-in">Accueil</a>
      </li>
      <li>
        <a href="/candidate/show" class="text-xl hover:text-light-blue transition duration-300 ease-out hover:ease-in">Candidat</a>
      </li>
      <li>
        <a href="/employer" class="text-xl hover:text-light-blue transition duration-300 ease-out hover:ease-in">Entreprise</a>
      </li>
      <li class="flex rounded-full border-2 border-light-blue hover:text-white hover:bg-light-blue transition duration-300 ease-out hover:ease-in px-4 py-2">
        <img src="../img/search.png" alt="">
        <a href="/search" class=" mx-2 text-xl ">Recherche</a>
      </li>
      <form method="POST" action="/logout" class=" m-0 w-sm px-6 py-2 border-light-blue border-2 bg-light-blue rounded-full text-white shadow-md hover:bg-white hover:text-light-blue transition duration-150 ease-out hover:ease-in focus:outline-none focus:ring-2 cursor-pointer text-center">@csrf<button type="submit" >Déconnexion</button></form>
      
      
    </ul>
    @else
    <ul class="flex justify-evenly xl:w-1/3 items-center">
      <li>
        <a href="/" class="text-xl hover:text-light-blue transition duration-300 ease-out hover:ease-in">Accueil</a>
      </li>
      <li>
        <a href="/search" class="rounded-full border-2 border-light-blue text-xl hover:text-white hover:bg-light-blue transition duration-300 ease-out hover:ease-in px-4 py-2">Recherche</a>
      </li>
      <li>
        <a href="/login" class="m-0 w-sm px-6 py-2 border-light-blue border-2 bg-light-blue rounded-full text-white shadow-md hover:bg-white hover:text-light-blue transition duration-150 ease-out hover:ease-in focus:outline-none focus:ring-2 cursor-pointer text-center">Connexion</a>
      </li>
  @endauth

</header>
