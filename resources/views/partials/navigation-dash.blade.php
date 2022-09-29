<div class="bg-white py-4">
  <div class="container flex justify-between items-center">
    <div class="flex space-x-4">
      <a href="{{ route('product.index') }}" class="text-lg {{ request()->routeIs('product.index') ? 'underline':'' }} font-semibold text-gray-600 hover:underline transition ">Liste des produits</a>
      <a href="{{ route('project.index') }}" class="text-lg {{  request()->routeIs('project.index') ? 'underline':''  }} font-semibold text-gray-600 hover:underline transition ">Liste des projets</a>
    </div>
    <div>
      <a href="{{ route('product.create') }}" class="text-lg px-4 py-2 bg-primary font-semibold text-white">Crée un nouveau produits</a>
      <a href="{{ route('project.create') }}" class="text-lg px-4 py-2 bg-primary font-semibold text-white">Crée un nouveau projets</a>
    </div>
  </div>
</div>