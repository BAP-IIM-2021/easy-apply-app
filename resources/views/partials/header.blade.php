<header class="w-full bg-white flex items-center justify-between px-10">
  <div class="w-1/3 xl:w-1/2">
    <img src="img/logo.png" alt="logo" class=" h-medium">
  </div>
    <ul class="flex justify-evenly w-1/2 xl:w-1/3 items-center">
      <li>
        <a href="" class="text-xl hover:text-light-blue transition duration-300 ease-out hover:ease-in">Accueil</a>
      </li>
      <li>
        <a href="{{ route('login') }}" class=" w-sm px-6 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 transition duration-150 ease-out hover:ease-in focus:outline-none focus:ring-2 cursor-pointer text-center">Se connecter</a>
      </li>
    </ul>
  </div>
</header>