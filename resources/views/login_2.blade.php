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
    <section class="h-screen justify-center text-xl flex items-center flex-col bg-slate-200">
        <div class=" w-sm h-sm bg-blue-500 rounded-full my-6"></div>
        <h1 class=" text-center text-4xl ">Inscrivez-vous</h1>
        <form class="flex flex-col w-5xl px-64 py-6 justify-center items-center" action="POST">
            <div class="flex justify-center items-center">
                <div class="flex flex-wrap" >
                    <div class="flex flex-col items-center my-4">
                        <label for="website"class="my-2" >Site Internet</label>
                        <input class="btn-primary" type="url" placeholder="Site web" name="website">
                    </div>
                    <div class="flex flex-col items-center my-4">
                        <label for="linkedIn" class="my-2" >LinkedIn</label>
                        <input class="btn-primary" type="text" placeholder="LinkedIn" name="linkedIn">
                    </div>
                    <div class="flex flex-col items-center my-4">
                        <label for="experience" class="my-2">Expériences</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="experience"> 
                            <option value="">--Sélectionnez l'option--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="flex flex-col items-center my-4">
                        <label for="soft_skills" class="my-2">Soft Skills</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="soft_skills"> 
                            <option value="">--Sélectionnez l'option--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="flex flex-col items-center my-4">
                        <label for="experience_years" class="my-2">Année d'expériences</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="experience_years"> 
                            <option value="">--Sélectionnez l'option--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="flex flex-col items-center my-4">
                        <label for="formation" class="my-2">Formation</label>
                        <select class="btn-primary" type="text" placeholder="Site" name="formation"> 
                            <option value="">--Sélectionnez l'option--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="flex flex-col items-center my-4">
                        <label for="diploma" class="my-2" >Diplômes</label>
                        <textarea class="btn-primary resize-none" placeholder="Diplômes" name="diploma"></textarea>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-center justify-center">
                        <label for="img" class="my-4">CV</label>
                        <input type="file" class=" rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="img">
                    </div>
                </div>
            </div>
            <input type="submit" value="Inscription"class="my-12 py-4 px-12 bg-blue-400 text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 mx-16 cursor-pointer">
        <p>Déjà un compte Easy Apply ? <a href="#" class=" text-blue-500 font-bold">Connexion</a></p>
        </form>
    </section>
</body>
</html>