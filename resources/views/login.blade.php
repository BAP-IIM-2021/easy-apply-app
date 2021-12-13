<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section class="h-screen justify-center text-xl flex items-center flex-col bg-orange-100">
        <div class=" w-sm h-sm bg-blue-500 rounded-full my-6">

        </div>
        <h1 class=" text-center text-4xl ">Inscrivez-vous</h1>
        <form class="flex w-5xl px-64 py-6 justify-center items-center" action="POST">
            <div class="flex flex-wrap" >
                <div class="flex flex-col items-center my-4">
                    <label for="last_name"class="my-2" >Nom</label>
                    <input class="btn-primary" type="text" placeholder="Nom" name="last_name">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="first_name" class="my-2" >Prénom</label>
                    <input class="btn-primary" type="text" placeholder="Prénom" name="first_name">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="birth_date" class="my-2">Date de naissance</label>
                    <input class="btn-primary" type="date" placeholder="Date de Naissance" name="birth_date">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="city" class="my-2">Ville</label>
                    <input class="btn-primary" type="text" placeholder="Ville" name="city">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="mail" class="my-2">E-mail</label>
                    <input class="btn-primary" type="email" placeholder="Adresse mail" name="mail">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="phone" class="my-2">Numéro</label>
                    <input class="btn-primary" type="tel" placeholder="Numéro" name="phone">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="password" class="my-2" >Mot de passe</label>
                    <input class="btn-primary" type="password" placeholder="Mot de passe" name="password">
                </div>
                <div class="flex flex-col items-center my-4">
                    <label for="password_valid" class="my-2" >Validation mot de passe</label>
                    <input class="btn-primary" type="password" placeholder="Validation du mot de passe" name="password_valid">
                </div>
            </div>
            <div>
                <div class="flex flex-col items-center justify-center">
                    <label for="img" class="my-4">Photo</label>
                    <input type="file" class=" rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="img">
                </div>
            </div>
        </form>
        <input type="submit" value="Suivant" class="my-12 py-4 px-12 bg-blue-400 text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 mx-16 cursor-pointer">
        <p>Déjà un compte Easy Apply ? <a href="#" class=" text-blue-500 font-bold">Connexion</a></p>
    </section>
</body>
</html>