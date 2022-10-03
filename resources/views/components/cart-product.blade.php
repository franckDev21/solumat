@props(['product'])

<div {{ $attributes->merge(['class' => 'block']) }}>
  @if(session()->has('message'))
  <div class="container px-10 mb-24 mt-10">
    <div id="alert-border-3" class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200" role="alert">
      <svg class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <div class="ml-3 text-xl font-medium text-green-700">
        {{session('message')}}
      </div>
    </div>
  </div>
  @else
  <form action="{{ route('commander.store') }}" method="POST" class="container px-10 mb-24 mt-10 flex justify-between items-start space-x-3">
    @csrf
    <div class=" w-[40%] ">
      <input required hidden type="hidden" name="product" value="{{ $product->id }}">
      <h1 class="text-center text-2xl mb-8 font-bold text-gray-700 pb-4 ">VOS INFORMATIONS</h1>
      <div class="">
        <div class="flex space-x-5 mb-8">
          <input name="firstname" required type="text" placeholder="Prénom *" class="px-4 py-4 rounded-md w-1/2 bg-white outline-none ring-0 border-0 focus:ring-0">
          <input name="lastname" required type="text" placeholder="Nom *" class="px-4 py-4 rounded-md w-1/2 bg-white outline-none ring-0 border-0 focus:ring-0">
        </div>
        <div class="flex space-x-5 mb-8">
          <input name="email" type="email"  placeholder="Votre Email (facultatif)" class="px-4 py-4 rounded-md w-1/2 bg-white outline-none ring-0 border-0 focus:ring-0">
          <input name="tel" type="tel" required placeholder="Téléphone *" class="px-4 py-4 rounded-md w-1/2 bg-white outline-none ring-0 border-0 focus:ring-0">
        </div>
      </div>
    </div>

    <div class="w-[60%]">
      <h1 class="text-center text-2xl mb-8 font-bold text-primary pb-4 border-b">VOTRE COMMANDE</h1>
      <div class="flex items-start justify-between ">
        <div class="w-[300px] h-[300px] flex-none overflow-hidden relative">
          <img class=" rounded-md w-[300px] h-auto hover:scale-105 transition" src="{{ $product->image ? asset("storage/$product->image"):asset('static/img/product.png') }}" alt="">
        </div>
        <div class="p-3">
          <h1 class="text-4xl font-bold text-gray-700 mb-4 -mt-4">{{ $product->name }}</h1>
          <p>
            {{ $product->description }}
          </p>
          <h1 class="pt-3 border-t-2 mt-4 text-3xl font-bold text-secondary mb-4">{{ number_format($product->price, 0, ',', '.') }} FCFA</h1>
          <button type="submit" class="uppercase rounded-full bg-primary hover:scale-105 transition cursor-pointer opacity-95 hover:opacity-100 px-4 py-2 w-full block font-bold text-white">commander</button>
        </div>
      </div>
    </div>
  </form>
  @endif
</div>