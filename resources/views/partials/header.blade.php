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