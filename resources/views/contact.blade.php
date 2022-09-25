<x-app-layout>
  <x-hero title="Contactez nous " />

  <div class="bg-white py-24">
    <div class="container px-10 flex justify-between items-start">
      <div class="flex flex-col w-1/2">
        <h2 class="my-2 font-bold text-secondary">Contact</h2>
        <div class="text-6xl font-bold mt-3 mb-10 flex justify-start items-start">
          <div class="grid grid-cols-3 justify-center gap-2 w-24 mr-4 translate-y-4">
            <span class="w-2 h-2 inline-block bg-black"></span>
            <span class="w-2 h-2 inline-block bg-secondary"></span>
            <span class="w-2 h-2 inline-block bg-black"></span>
            <span class="w-2 h-2 inline-block"></span>
            <span class="w-2 h-2 inline-block bg-black"></span>
            <span class="w-2 h-2 inline-block bg-black"></span>
            <span class="w-2 h-2 inline-block"></span>
            <span class="w-2 h-2 inline-block"></span>
            <span class="w-2 h-2 inline-block bg-secondary"></span>
          </div>
          <div>Vous avez une Péoccupation ? Parlez nous-en</div>
        </div>

        <div class="w-[500px] h-[400px] relative">
          <img src="{{ asset('img/p1.jpg') }}" class="absolute top-0 h-[70%] w-[90%]" alt="">
          <img src="{{ asset('img/p2.jpg') }}" class="absolute bottom-0 right-0 h-[70%] w-[90%]" alt="">
        </div>
      </div>
      @if(session()->has('message'))
        <div class="w-1/2 p-24">
          <div id="alert-border-3" class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-xl font-medium text-green-700">
              {{session('message')}}
            </div>
          </div>
        </div>

      @else
        <form action="{{ route('contact.send') }}" class="w-1/2" method="POST">
          @csrf
          <p class="my-4 w-[90%] text-lg mb-10">Nous sommes heureux de discuter de la situation de votre organisation. Veuillez donc nous contacter via les coordonnées ci-dessous, ou entrez votre demande. </p>
          <div class="flex space-x-5 mb-8 mt-24">
            <input name="firstname" required type="text" placeholder="Prénoms *" class="px-4 py-4 rounded-md w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
            <input name="lastname" required type="text" placeholder="Noms *" class="px-4 py-4 rounded-md w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
          </div>
          <div class="flex space-x-5 mb-8">
            <input name="email" type="email" required placeholder="Votre Email *" class="px-4 py-4 rounded-md w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
            <input name="tel" type="tel" required placeholder="Téléphone *" class="px-4 py-4 rounded-md w-1/2 bg-gray-200 outline-none ring-0 border-0 focus:ring-0">
          </div>
          <textarea name="message" required placeholder="Votre message ici ..." class="px-4 py-4 rounded-md w-full bg-gray-200 outline-none ring-0 border-0 focus:ring-0" id="" cols="30" rows="6"></textarea>
          <button type="submit" class="px-5 py-4 bg-secondary w-full inline-block font-bold mt-5 text-white text-center rounded-md">Envoyez votre message</button>
        </form>
      @endif
      
    </div>
  </div>

  <x-map />
</x-app-layout>