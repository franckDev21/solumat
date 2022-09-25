@props(['title'])

<div class="hero py-10">
  <div class="container h-[200px] justify-center items-center flex">
    <h1 class="text-5xl font-bold text-white">{{ $title }}</h1>
    {{ $slot }}
  </div>
</div>