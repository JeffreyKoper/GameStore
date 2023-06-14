@extends('layouts.app')

@section('content')
<div class="container border rounded p-4 bg-primary bg-gradient text-white">
  <h1>Winkelwagen</h1>
  
  <div id="cart" class="bg-dark bg-gradient p-3">
    @foreach ($cart as $carts)
    @if($carts->isBetaald == 0)
        <p>Game: {{$carts->game->titel}}</p>
        <p>Aantal: {{$carts->aantal}}</p>
        <p>Prijs: ${{$carts->total}}</p>
        @endif
        @endforeach
        <h1>Totaal prijs: ${{$totalPrice}}</h1>
  </div>
  <form method="POST" action="{{route('winkel.voltooi')}}">
    @csrf <!--Voeg een CSRF-token toe om de beveiliging te waarborgen-->
    <input type="hidden" name="isBetaald" value="1">
    <button type="submit" class="btn btn-dark mt-3" >Afrekenen</button>
  </form>
<br>
<br>
<br>
@endsection
