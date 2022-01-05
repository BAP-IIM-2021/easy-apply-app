@extends('layout')

@section('content')
    <section class=" mt-28 text-xl flex items-center flex-col ">
        <div class=" w-sm h-sm rounded-full mb-6 bg-gray-50">
            <img src="../img/logo.png" alt="logo">
        </div>
        <h1 class=" text-center text-3xl ">Inscrivez-vous</h1>
        <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" method="POST" action="/candidate/register">
            <div id="content_inscription_1" class="flex xl:flex-row flex-col justify-center items-center xl:h-xl">
                <div class="flex flex-wrap" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="last_name"class="my-2" >Nom</label>
                        <div class="input-div">
                        <input class="btn-second outline-input" type="text" placeholder="Nom" name="last_name" value="{{ old('last_name')}}">
                            <span class="focus-border">
                                <i></i>
                            </span>
                        @error('last_name')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="first_name" class="my-2" >Prénom</label>
                        <div class="input-div">
                        <input class="btn-second outline-input" type="text" placeholder="Prénom" name="firstname" value="{{ old('firstname')}}">
                            <span class="focus-border">
                                <i></i>
                            </span>
                        @error('firstname')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="birth_date" class="my-2">Date de naissance</label>
                        <div class="input-div">
                        <input class="btn-second outline-input text-gray-400" type="date" placeholder="Date de Naissance" name="birth_date">
                            <span class="focus-border">
                                <i></i>
                            </span>
                        @error('birth_date')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="city" class="my-2">Ville</label>
                        <div class="input-div">
                        <input class="btn-second outline-input" type="text" placeholder="Ville" name="address">
                        <span class="focus-border">
                                <i></i>
                            </span>
                        @error('address')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="phone" class="my-2">Numéro</label>
                        <div class="input-div">
                        <input class="btn-second outline-input" type="tel" placeholder="Numéro" name="phone_number">
                            <span class="focus-border">
                                <i></i>
                            </span>
                        @error('phone_number')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="img" class="my-4">Photo</label>
                        <input type="file" class=" max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="img">
                        @error('photo')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>


            <div id="content_inscription_2" class="xl:flex-row flex-col justify-center items-center hidden bg">
                <div class="flex flex-wrap" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="website"class="my-2" >Site Internet</label>
                        <div class="input-div">
                        <input class="btn-second outline-input" type="url" placeholder="Site web" name="website">
                            <span class="focus-border">
                                <i></i>
                            </span>
                        @error('website')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>

                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="linkedIn" class="my-2" >LinkedIn</label>
                        <div class="input-div">
                        <input class="btn-second outline-input" type="text" placeholder="LinkedIn" name="linkedIn">
                            <span class="focus-border">
                                <i></i>
                            </span>
                        @error('linkedin')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div id ="container_exp" class="mx-16 mt-4"> <!-- Container Expériences -->
                        <label for="experience" class="my-2">Expériences</label>
                        <div class="content">
                            <div class="options flex flex-col items-start mt-4">
                                <div class="input-div">
                                <select class="btn-second outline-input" type="text" placeholder="Site" name="experience">
                                    <option value="">--Sélectionnez l'option--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div>
                    <div id ="container_ss" class=" mx-16 mt-4"> <!-- Container Soft skills -->
                        <label for="soft_skills">Soft Skills</label>
                        <div class="content">
                            <div class="options flex flex-col items-start mt-4">
                                <div class="input-div">
                                <select class="btn-second outline-input" type="text" placeholder="Site" name="soft_skills">
                                    <option value="">--Sélectionnez l'option--</option>
                                    {{-- TODO: foreach option --}}
                                </select>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="experience_years" class="my-2">Année d'expériences</label>
                        <div class="input-div">
                        <select class="btn-second outline-input" type="text" placeholder="Site" name="experience_years">
                            <option value="">--Sélectionnez l'option--</option>
                        </select>
                        <span class="focus-border">
                            <i></i>
                        </span>
                        </div>
                    </div>


                    
                    <div id ="container_form" class=" mx-16 mt-4"> <!-- Container Formation -->
                        <label for="formation" class="my-2">Formation</label>
                        <div class="content">
                            <div class=" options flex flex-col items-start mt-4">
                                <div class="input-div">
                                <select class="btn-second outline-input" type="text" placeholder="Site" name="formation">
                                    <option value="">--Sélectionnez l'option--</option>
                                    @php 
                                    $business_sector = App\Models\BusinessSector::all()
                                    @endphp
                                    @foreach ($business_sector as $sector)
                                    <option value="{{ $sector->id}}">{{$sector->label}}</option>
                                @endforeach
                                </select>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div>
                    <div id ="container_dip" class="mx-16 mt-4"> <!-- Container Expériences -->
                        <label for="diploma" class="my-2" >Diplômes</label>
                        <div class="content">
                            <div class="options flex flex-col items-start mt-4">
                                <div class="input-div">
                                <select class="btn-second outline-input" type="text" placeholder="Diplômes" name="diploma">
                                    <option value="">--Sélectionnez l'option--</option>
                                    @php 
                                    $diplomes = App\Models\Degree::all()
                                    @endphp
                                    @foreach ($diplomes as $diplome)
                                    <option value="{{ $diplome->id}}">{{$diplome->label}}</option>
                                @endforeach
                                </select>
                                <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="cv" class="my-4">CV</label>
                        <input type="file" class=" max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="cv">
                        @error('cv')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <a id="next_inscription" class=" w-sm my-12 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">Suivant </a>
            <div id="submit_inscription" class=" hidden flex-col">
                <button type="submit" class=" w-sm mt-12 mb-1 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">
                <a id="back_inscription" class=" w-sm cursor-pointer text-gray-500 text-center mb-4 hover:text-black">Retour </a>
                </button>
            </div>
                <p>Déjà un compte Easy Apply ? <a href="/login" class="blue-underline text-light-blue font-bold">Connexion</a></p>

        </form>
    </section>
</body>

    @endsection
    