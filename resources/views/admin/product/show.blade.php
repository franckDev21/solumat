<x-app-layout>
  @include('partials.navigation-dash')
  <div class="conatainer px-10 my-10">
    <div class="bg-white p-4">
      <form method="POST" action="{{ route('product.update',$product) }}" enctype="multipart/form-data">
        @csrf

        <div class="flex">
          <label for="photo" class="w-1/3 min-h-[300px] bg-gray-100 mr-2 relative after:w-full after:h-full after:bg-slate-600 after:bg-opacity-30 after:absolute after:z-10 after:opacity-0 hover:after:opacity-100 after:transition cursor-pointer">
            <img id="image" class="absolute w-full h-full object-cover" src="{{ $product->image ? asset("storage/$product->image"):asset('static/img/product.png') }}" alt="product">
            @error('image')
            <span class="text-sm text-red-400 block">{{ $message }}</span>
            @enderror
          </label>
          <input hidden class="hidden" type="file" accept="image/*" name="image" id="photo">
          <div class="w-2/3 ml-2">
            <div>
              <x-input-label for="nom" :value="__('Description du produit')" class="inline-block" /> <span class="text-gray-400 text-xs italic inline-block ml-1">(Facultatif)</span>
              <textarea name="description" placeholder="Entrer la description du produit ici … " class="w-full placeholder:italic rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="" cols="30" rows="3">{{ old('description',$product->description) }}</textarea>
            </div>
            <div class="flex pb-3 ">
              <div class="mt-1 w-1/2 mr-1 ">
                  <x-input-label for="nom" :value="__('Nom du produit')" class="inline-block" />
                  <x-text-input placeholder='Entrer le nom du produit' id="nom" class="w-full placeholder:italic" type="text"
                      name="name" :value="old('name',$product->name)" required autofocus />
                  @error('name')
                      <span class="text-sm text-red-400 block">{{ $message }}</span>
                  @enderror
              </div>
              <div class="mt-1 w-1/2 ml-1">
                  <x-input-label for="price" :value="__('Prix unitaire')" class="inline-block" /> <span class="text-gray-400 text-xs italic inline-block mx-1">(En FCFA)</span>
                  <x-text-input placeholder='le produit coûte combien ?' id="price" class="w-full placeholder:italic" type="number"
                      name="price" required :value="old('price',$product->price)" />
                  @error('price')
                      <span class="text-sm text-red-400 block">{{ $message }}</span>
                  @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="mt-2">

          <div class="flex mt-2 pb-3 items-center">
            <div class="mt-1 w-1/2 mr-1 ">
                <x-input-label for="category_id" :value="__('Quantité')" class="inline-block" />
                <x-text-input placeholder='Entrer la quantité en stock du produit' id="quantite" class="w-full placeholder:italic" type="number"
                name="quantite" required :value="old('quantite',$product->quantite)" min='0' />
            </div>

            <div class="mt-4 w-1/2 ml-1">
                <label for="online" class="inline-flex cursor-pointer items-center justify-center mt-1">
                  <span>Visible en ligne ? </span> <input @checked($product->online) class="text-lg w-6 h-6 text-primary ring-0 border-2 focus:ring-0 focus:outline-none  inline-block ml-3" type="checkbox" name="online" id="online">
                </label>
            </div>
          </div>
          
          <div class="my-3">
            <x-primary-button>Mettre a jour le produit</x-primary-button>
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