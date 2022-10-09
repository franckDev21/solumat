<div {{ $attributes->merge(['class' => 'my-10']) }}>
  <h1 class="text-secondary font-bold text-center flex items-center justify-center">
     <span class="h-1 w-14 bg-primary inline-block mr-3"></span> Que Proposons nous ?
  </h1>
  <h2 class="text-4xl text-center font-bold mt-5 mb-2">Nos Prestations Professionnelles</h2>
  <p class="text-center mb-4">
      Nous avons plusieurs types de prestations pour faciliter la réussite de votre projet.
  </p>
  <div class="container px-2 xl:px-10 text-center">
      <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
          <div class="bg-white shadow-md rounded-md overflow-hidden">
              <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/banner.jpg') }}" alt=""></div>
              <div class="p-4">
                  <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Création & Entretien des piscines</h1>
                  <p>La piscine est avant tout un plaisir, elle apporte du bien-être et vous offre des vacances à la maison</p>
              </div>    
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
              {{-- <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/produits-piscine.jpg') }}" alt=""></div> --}}

              <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/v2.jpeg') }}" alt=""></div>
              <div class="p-4">
                  <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Vente des produits d'entretien</h1>
                  <p>vente de produits d'entretiens!Vous souhaitez acheter des produits pour l'entretien de votre piscine afin d'en profiter durant les beaux jours? Venez découvrir toute une gamme de produit de qualité dans notre boutique</p>
              </div>    
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
              <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/RAISONS1C.jpg') }}" alt=""></div>
              <div class="p-4">
                  <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Plomberie</h1>
                  <p>plomberiePour tout vos problèmes de plomberie : installation, réparation des conduits d’eaux.....  Solumat sarl vous propose un service de qualité</p>
              </div>    
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
              <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/b3.jpg') }}" alt=""></div>
              <div class="p-4">
                  <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Réalisation des forages & Traitement des eaux</h1>
                  <p>forage!Besoin d’un forage ?
                    Alors vous avez frapper a la bonne porte car Solumat sarl est aussi spécialiser dans la contraction des forage et ceci avec un matériel de qualité .</p>
              </div>    
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
              <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/PEINTRE.jpg') }}" alt=""></div>
              <div class="p-4">
                  <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Peinture bâtiment</h1>
                  <p>Peindre c’est donner vie au bâtiment ! Faite nous confiance et nous mettons à votre disposition des artiste qui feront de vos projet des oeuvres d’art car depuis plus de 10 ans nous somme avec vous
                </p>
              </div>    
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
              <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/v1.jpg') }}" alt=""></div>
              <div class="p-4">
                  <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Vidange des fosses</h1>
                  <p>Solumat sarl propose également un service de qualité  dans les travaux d’assainissement de vidange et de curage des fosses septiques à Douala et partout au Cameroun</p>
              </div>    
          </div>
      </div>
  </div>
</div>