<div class="bg-tersiaire py-3 hidden xl:block">
  <div class="container text-gray-300 flex justify-between items-center text-sm">
    <div>Bienvenue sur le site web de <span class="text-primary">SOLUMAT SARL</span></div>

    <div class="flex items-center">
      <span class=""><i class="fa-solid fa-envelope text-primary"></i> solumatgn@gmail.com</span>
      <span class="w-[1.2px] bg-opacity-50 h-3 bg-slate-300 inline-block mx-3"></span>
      <span class=""><i class="fa-solid fa-clock text-primary"></i> Mon - Fri: 9:00 am - 07.00pm</span>
      <span class="w-[1px] h-3 bg-opacity-50 bg-slate-300 inline-block mx-3"></span>
      <span> <i class="fa-solid fa-location-dot text-primary"></i> Addresse : Douala, Akwa</span>
    </div>
  </div>
</div>

<!-- mobile -->  
<header class="bg-white shadow block lg:hidden">
  <div class="container py-3 flex justify-between items-center">
    <a href="/" class="logo">
      <x-logo />
    </a>

    <input type="checkbox" class="hidden" hidden id="burger">

    <div class="menu cursor-pointer fixed h-full w-full pt-16 bg-gray-700 text-white shadow-md top-0 bottom-0 left-0">
      <label id="croix" for="burger" class="absolute opacity-80 top-4 right-4 w-8 h-8 ">
        <span class="h-1 top-3 absolute rotate-[45deg] w-full inline-block bg-white rounded-md"></span>
        <span class="h-1 top-3 absolute rotate-[-45deg] w-full inline-block bg-white rounded-md"></span>
      </label>
      
      <div class="bg-white p-2"> 
        <a href="/" class="logo">
          <x-logo />
        </a>
      </div>

      <span class="h-1 mt-2 w-full bg-gray-100 inline-block"></span>

      <div class="w-full"> 
        <a class="py-2 px-2 inline-block w-full text-2xl {{ request()->routeIs('home') ? 'text-primary':'' }}" href="{{ route('home') }}">Accueil</a>
        <a class="py-2 px-2 inline-block w-full text-2xl {{ request()->routeIs('services') ? 'text-primary':'' }}" href="{{ route('services') }}">Services</a>
        <a class="py-2 px-2 inline-block w-full text-2xl {{ request()->routeIs('boutiques') ? 'text-primary':'' }}" href="{{ route('boutiques') }}">Boutiques</a>
        <a class="py-2 px-2 inline-block w-full text-2xl {{ request()->routeIs('realisations') ? 'text-primary':'' }}" href="{{ route('realisations') }}">Quelques Réalisations</a>
        <a class="py-2 px-2 inline-block w-full text-2xl {{ request()->routeIs('contact') ? 'text-primary':'' }}" href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('devis') }}" class="bg-secondary px-4 py-2 text-white rounded-md mt-2 ml-2 uppercase text-center  inline-block w-[90%] mx-auto transition">Obtenir un devis</a>
      </div>

    </div>  

    <label for="burger" class="w-8 h-8 cursor-pointer flex flex-col space-y-1 justify-center items-center">
      <span class="h-1.5 w-full inline-block bg-secondary rounded-md"></span>
      <span class="h-1.5 w-full inline-block bg-secondary rounded-md"></span>
      <span class="h-1.5 w-full inline-block bg-secondary rounded-md"></span>
    </label>
  </div>
</header>
<!-- mobile -->

<!-- Desktop header -->
<header class="bg-white shadow hidden lg:block">
  <div class="container py-3 flex justify-between items-center">
    <a href="/" class="logo">
      <x-logo />
    </a>

    <nav class="flex items-center">
      <div class="flex space-x-6 xl:text-lg font-semibold text-tersiaire">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active':'' }}">Accueil</a>
        <a href="{{ route('services') }}" class="inline-block nav-link  {{ request()->routeIs('services') ? 'active':'' }}">Services</a>
        <a href="{{ route('realisations') }}" class="inline-block nav-link {{ request()->routeIs('realisations') ? 'active':'' }}">Nos Réalisations</a>
        <a href="{{ route('boutiques') }}" class="inline-block nav-link {{ request()->routeIs('boutiques') ? 'active':'' }}">Boutiques</a>
        <a href="{{ route('contact') }}" class="inline-block nav-link {{ request()->routeIs('contact') ? 'active':'' }}">Contact</a>
      </div>
      <div class="ml-4 xl:text-lg">
        <a href="{{ route('devis') }}" class=" nav-btn bg-opacity-80 bg-secondary text-sm text-white font-semibold"><span>Demander un devis</span> <i class="fa-solid ml-2 fa-arrow-right-long devis"></i></a>
        
        @auth
        <x-dropdown-link :href="route('product.index')" class="nav-btn border-2 font-semibold text-sm ">
            {{ __('Dashboard') }}
        </x-dropdown-link>
        <form method="POST" class="inline-block" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')" class="nav-btn border-2 font-semibold text-sm "
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Se déconnecter') }}
            </x-dropdown-link>
        </form>
        @else
          <a href="{{ route('login') }}" class="nav-btn border-2 font-semibold text-sm "><i class="fa-solid fa-user mr-4"></i> Se connecter</a>
        @endauth
        
      </div>
    </nav>
  </div>
</header>
<!-- End Desktop header -->

