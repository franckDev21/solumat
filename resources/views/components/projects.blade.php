@props(['projects'])

<div {{ $attributes->merge(['class' => 'my-10']) }} >
  <h1 class="text-secondary font-bold text-center flex items-center justify-center">
     <span class="h-1 w-5 bg-primary inline-block mr-3"></span>Produits
  </h1>
  <h2 class="text-4xl text-center font-bold mt-5 mb-2">Nos différentes réalisations</h2>
  <p class="text-center mb-4">
    voici une liste de quelque projets que nous avons réalisé ainsi que leurs durée respective
  </p>
  <div class="container md:px-5 xl:px-10 text-center">
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @foreach ($projects as $project)
            <a href="{{ route('devis') }}" class="bg-white shadow-md rounded-lg max-w-sm ">
                <div class="flex justify-center rounded-t-lg items-center text-center overflow-hidden relative">
                    <span class="absolute top-0 right-0 px-4 py-2 bg-green-600 bg-opacity-80 z-10 font-bold text-white text-sm">En {{ $project->duree }}</span>
                    <img id="image" class=" h-[300px] transition transform hover:scale-110 " src="{{ $project->image ? asset("storage/$project->image"):asset('static/img/product.png') }}" alt="project">
                </div>
            </a>
        @endforeach
      </div>
      <div class="mt-4">
        {{ $projects->links() }}
      </div>
      
  </div>
</div>