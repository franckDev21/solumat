<x-app-layout>
  @include('partials.navigation-dash')
  <div class="conatainer px-10 my-10">
    <div class="bg-white p-4">
      <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="flex">
          <label for="photo" class="w-1/3 min-h-[300px] bg-gray-100 mr-2 relative after:w-full after:h-full after:bg-slate-600 after:bg-opacity-30 after:absolute after:z-10 after:opacity-0 hover:after:opacity-100 after:transition cursor-pointer">
            <img id="image" class="absolute w-full h-full object-cover" src="{{ asset('static/img/product.png') }}" alt="product">
            @error('image')
            <span class="text-sm text-red-400 block">{{ $message }}</span>
            @enderror
          </label>
          <input hidden class="hidden" type="file" accept="image/*" name="image" id="photo">
          <div class="w-2/3 ml-2">
            <div>
              <x-input-label for="nom" :value="__('Description de votre projet')" class="inline-block" /> <span class="text-gray-400 text-xs italic inline-block ml-1">(Facultatif)</span>
              <textarea name="description" placeholder="Entrer la description du projet ici … " class="w-full placeholder:italic rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="flex pb-3 ">
              <div class="mt-1 w-1/2 mr-1 ">
                  <x-input-label for="nom" :value="__('Nom du projet')" class="inline-block" />
                  <x-text-input placeholder='Entrer le nom du projet ' id="nom" class="w-full placeholder:italic" type="text"
                      name="name" :value="old('name')" required autofocus />
                  @error('name')
                      <span class="text-sm text-red-400 block">{{ $message }}</span>
                  @enderror
              </div>
              <div class="mt-1 w-1/2 ml-1">
                  <x-input-label for="duree" :value="__('Durée de réalisation du projet')" class="inline-block" />
                  <x-text-input placeholder='Combien de temps a durée le projet ?' id="duree" class="w-full placeholder:italic" type="text"
                      name="duree" required :value="old('duree')" />
                  @error('duree')
                      <span class="text-sm text-red-400 block">{{ $message }}</span>
                  @enderror
              </div>
            </div>
            <div class="flex mt-2 pb-3 items-center">

              <div class="mt-4 w-full ml-1">
                  <label for="online" class="inline-flex cursor-pointer items-center justify-center mt-1">
                    <span>Visible en ligne ? </span> <input class="text-lg w-6 h-6 text-primary ring-0 border-2 focus:ring-0 focus:outline-none  inline-block ml-3" type="checkbox" name="online" id="online">
                  </label>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-2">
          <div class="my-3">
            <x-primary-button>Enregistrer le nouveau projet</x-primary-button>
          </div>
        </div> 
    </form>
    </div>
  </div>

   <!-- js -->
   <x-slot name="js">
      <script defer>
          document.getElementById('photo').addEventListener('change', e => {
            if(e.target.files.length === 0){
              document.getElementById('image').src = '/static/img/product.png'
              return
            }
            let file = e.target.files[0]
            let url  = URL.createObjectURL(file)
            document.getElementById('image').src = url
          })
      </script>

   </x-slot>
</x-app-layout>