@extends('layouts.app')

@section('content')
<br>
<div class="container border rounded p-4 bg-primary bg-gradient text-white">
  <h1>Winkelwagen</h1>
  
  <div id="cart" class="bg-dark bg-gradient p-3">
    <p>Uw winkelwagen is leeg.</p>
  </div>
  
  <button type="button" class="btn btn-dark mt-3">Afrekenen</button>
</div>
<br>
<br>
<br>
@endsection
