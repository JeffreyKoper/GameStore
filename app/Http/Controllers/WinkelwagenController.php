<?php

namespace App\Http\Controllers;

use App\Models\Winkelwagens;
use Illuminate\Http\Request;

class WinkelwagenController extends Controller
{
    public function toevoegen(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'getal' => 'required|numeric',
            'game_id' => 'required',
            'totaal_prijs' => 'required', 
        ]);

        $userId = auth()->user()->id;
        // Create a new Winkelwagens instance with the validated data
        $winkelwagen = new Winkelwagens();
        $winkelwagen->user_id = $userId;
        $winkelwagen->game_id = $validatedData['game_id'];
        $winkelwagen->totaal_prijs = $validatedData['totaal_prijs'];
       // $winkelwagen->game_id = 
        $winkelwagen->aantal = $validatedData['getal'];
        // Set other properties as needed

        // Save the winkelwagen to the database
        $winkelwagen->save();

        // Redirect or return a response
        return redirect()->route('game.show');
    }

    public function show()
    {
        $userId = auth()->user()->id;
        $cart = Winkelwagens::where('user_id', $userId)->get();
        $total = 0;
        $totalPrice = 0;
        foreach ($cart as $item) {
            $item->total = $item->totaal_prijs * $item->aantal;
            $totalPrice += $item->total;
        }
        //collection sum function
        return view('winkelwagen.index', ['cart' => $cart, 'totalPrice' => $totalPrice]);
    }
    public function destroy()
    {
        $userId = auth()->user()->id;
        Winkelwagens::where('user_id', $userId)->delete();

        // Redirect or return a response
        return redirect()->route('winkelwagen.besteld');
    }
}