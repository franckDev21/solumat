<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Bonjour SOLUMAT SARL </h1>
  @if($type !== 'contact')
    <h2>Service : {{ $data->service }} </h2>
    <p>Vous avez un nouveau message de demande de devis provenant de votre site internet !</p>
  @else
    <p>Vous avez un nouveau message provenant de votre site internet !</p>
  @endif
  
  <p>
    <h2>{{ $data->lastname }} {{ $data->firstname }}</h2> 
    Vous a envoyer un message :  <br>
    
    <p style="background-color: #eee; padding: 2rem; font-size:1.3rem">{{ $data->message }}</p>

    Email de {{ $data->lastname }} {{ $data->firstname }} :  {{ $data->email }}
  </p>
</body>
</html>