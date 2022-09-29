<x-app-layout>
    @include('partials.banner')
    
    <div class="p-10">
        <div class="container flex justify-between">
            <div class="w-[calc(100%-450px)]">
                <h1 class=" text-secondary font-bold">Pourquoi Nous ?</h1>
                <h2 class="text-5xl font-bold my-6 text-tersiaire ">Nous sommes a votre service pour la reuisite de vos projets </h2>
                <p class="w-[80%] my-10">
                    SOLUMAT SARL est une entreprise de Services Professionnels avec une Expertise Avérée dans divers secteurs d’activité, notament en  Conseil & Gestion, Nettoyage et Services, Services à la Personne.
                </p>
                <div>
                    <button class="nav-btn bg-secondary bg-opacity-80 uppercase font-bold border-4 border-secondary text-white">Nos réalisations <i class="fa-solid fa-globe ml-4"></i></button>
                    <button class="nav-btn bg-secondary bg-opacity-20 uppercase font-bold border-4 text-secondary">Demander votre devis <i class="fa-regular fa-file-lines ml-4"></i></button>
                </div>
            </div>
            <img class="w-[400px] rounded-md" src="{{ asset('img/i2.jpg') }}" alt="">
        </div>
    </div>

    <x-prestations-service  />

    <x-products :products="$products" />

    <x-devis />

    <x-map />

</x-app-layout>