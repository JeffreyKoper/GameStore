        <!-- Section-->
        @extends('layouts.app')
        @section('content')
        <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($data as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset($item->image) }}" alt="..." style="height: 350px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$item->titel}}</h5>
                                <!-- product beoordeling -->
                                <h6 class="fw-bolder">
                                    <div>
                                        @for ($i = 1; $i <= $item->beoordeling; $i++)
                                        <i class="bi-star-fill text-warning"></i>
                                        @endfor
                                    </div>
                                </h6>
                                <!-- product console -->
                                <h6 class="fw-bolder">{{$item->console}}</h6>
                                <!-- release datum -->
                                <h6 class="fw-bolder">uitgebracht op: {{$item->uitgave_datum}}</h6>
                                <!-- Product price-->   
                                ${{$item->prijs}}.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            @guest
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('login')}}">Log in om te bestellen</a></div>
                            @endguest
                            @auth
                                <!--Formulier hier-->
                                <form method="POST" action="{{route('game.toevoegen')}}">
                                    @csrf <!--Voeg een CSRF-token toe om de beveiliging te waarborgen-->
                                    <!-- hidden input  voor de game Id-->
                                    <!--Tekstvak voor getallen-->
                                    <input class="text-center col-sm-5 col-form-label" type="number" name="getal" placeholder="Aantal" required>
                                    <input type="hidden" name="game_id" value="{{$item->id}}">
                                    <input type="hidden" name="totaal_prijs" value="{{$item->prijs}}">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-outline-dark mt-auto">Toevoegen aan winkelwagen</button>
                                    </div>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            <section class="py-5">
            
            </section>
        @endsection
