@extends('layouts.app')

@section('content')
<div class="container border rounded p-4 bg-primary bg-gradient text-white">
  <h1>Winkelwagen</h1>
  
  <div id="cart" class="bg-dark bg-gradient p-3">
    @foreach ($cart as $carts)
      <p>Game: {{$carts->game->titel}}</p>
      <p>Aantal: {{$carts->aantal}}</p>
      <p>Prijs: ${{$carts->total}}</p>
    @endforeach
    <h1>Totaal prijs: ${{$totalPrice}}</h1>
  </div>
  <form action="{{ route('winkelwagens.destroy') }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-dark mt-3" >Afrekenen</button>
  </form>
</div>
<br>
<br>
<br>
@endsection
