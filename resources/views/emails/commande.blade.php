<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Bonjour SOLUMAT SARL , Vous avez une nouvelle commande </h1>

  <p>
    <h2>Informations du client <br> 
      Nom :  {{ $data->lastname }} <br>
      Prénom : {{ $data->firstname }} <br>
      Tél : {{ $data->tel }} <br>
      @if ($data->email)
      Email : {{ $data->email }}
      @endif
    </h2> 

    <hr>

    <h2 style="background-color: #eee; padding: 2rem; font-size:1.3rem">
      Informations du produit <br>
      Nom du produit : {{ $data->product->name }} <br>
      Prix du produit : {{ number_format($data->product->price, 0, ',', '.') }}FCFA <br>
    </h2>

  </p>
</body>
</html>