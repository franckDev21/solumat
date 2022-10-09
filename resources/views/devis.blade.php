<x-app-layout>
  <x-hero title="Demander votre devis" />

  <div class="container  md:px-5 xl:px-10 mb-10">

    @if(session()->has('message'))
      <div class="w-full p-3 xl:p-24">
        <div id="alert-border-3" class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200" role="alert">
          <svg class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <div class="ml-3 text-xl font-medium text-green-700">
            {{session('message')}}
          </div>
        </div>
      </div>
    @else
      <h1 class="text-secondary font-bold text-center flex items-center justify-center mt-16">
        <span class="h-1 w-5 bg-primary inline-block mr-3"></span>formulaire
      </h1>
      <h2 class="text-4xl text-center font-bold mt-5 mb-2">Formulaire de demande de devis</h2>
      <p class="text-center mb-2">
        Veuillez remplir le formulaire ci dessous pour demander un devis 
      </p>
      <form action="{{ route('devis.send') }}" class="w-full" method="POST">
        @csrf
        <div class="flex md:space-x-5 mb-4 md:mb-8 mt-10 md:flex-row flex-col ">
          <input name="firstname" required type="text" placeholder="Prénom *" class="px-4  py-4 rounded-md w-full md:w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
          <input name="lastname" required type="text" placeholder="Nom *" class="px-4 mt-4 md:mt-0 py-4 m-0 rounded-md w-full md:w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
        </div>
        <div class="flex md:space-x-5 mb-4 md:mb-8 mt-10 md:flex-row flex-col">
          <input name="email" type="email" required placeholder="Votre Email *" class="px-4 py-4 rounded-md w-full md:w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
          <input name="tel" type="tel" required placeholder="Téléphone *" class="px-4 py-4 mt-4 md:mt-0 rounded-md w-full md:w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
        </div>
        <div class="my-4">
          <label for="service" class="mb-2 inline-block">Choisissez le service *</label> <br>
          <select name="service" class="px-4 py-4 rounded-md w-full bg-gray-200 outline-none ring-0 border-0 focus:ring-0" id="service">
            @foreach (['Création des piscines','Entretien des piscines','Vente des produits d\'entretien','Plomberie','Réalisation des forages & traitement des eaux','Peinture bâtiment','Vidange des fosses'] as $item)
              <option value="{{ $item }}">{{ $item }}</option>
            @endforeach
          </select>
        </div>
        <textarea name="message" required placeholder="Votre message ici ..." class="px-4 py-4 rounded-md w-full bg-gray-200 outline-none ring-0 border-0 focus:ring-0" id="" cols="30" rows="6"></textarea>
        <button type="submit" class="px-5 py-4 bg-secondary w-full inline-block font-bold mt-5 text-white text-center rounded-md">Demander votre devis</button>
      </form>
    @endif
  </div>

</x-app-layout>