<x-app-layout>
    @include('partials.banner')
    
    <div class="pt-5 xl:p-10">
        <div class="container flex justify-between">
            <div class="w-full lg:w-[calc(100%-450px)]">
                <h1 class=" text-secondary font-bold">Pourquoi Nous ?</h1>
                <h2 class="text-xl md:text-3xl xl:text-5xl font-bold my-3 md:my-6 text-tersiaire ">Nous sommes a votre service pour la reuisite de vos projets </h2>
                <p class="w-[80%] my-4 md:my-10">
                    SOLUMAT SARL est une entreprise de Services Professionnels avec une Expertise Avérée dans divers secteurs d’activité, notament en  Conseil & Gestion, Nettoyage et Services, Services à la Personne.
                </p>
                <div class="flex w-full">
                    <button class="px-2 py-2 xl:px-4 xl:py-3  xl:text-base bg-secondary bg-opacity-80 md:uppercase font-bold border-4 border-secondary text-white"><span class=" hidden md:inline-block">Nos</span>réalisations <i class="fa-solid fa-globe ml-1 xl:ml-4"></i></button>
                    <button class="px-2 py-2.5 xl:px-4 xl:py-3  xl:text-base bg-secondary bg-opacity-20 md:uppercase font-bold border-4 text-secondary">Demander un devis <i class="fa-regular fa-file-lines ml-1 xl:ml-4"></i></button>
                </div>
            </div>
            <img class="hidden lg:inline-block w-[400px] rounded-md" src="{{ asset('img/i2.jpg') }}" alt="">
        </div>
    </div>

    <x-prestations-service />

    <x-products class="hidden lg:block" :products="$products" />

    <x-devis class="hidden lg:block" />

    <x-map class="hidden lg:block" />

</x-app-layout>