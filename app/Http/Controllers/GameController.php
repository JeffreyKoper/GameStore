<?php

namespace App\Http\Controllers;
use App\Models\Games;
use Illuminate\Http\Request;

class GameController extends Controller
{
  public function index()
    {
      $data = Games::take(4)->get();
      return view('index', ['data' => $data]);
    }

    public function allGames()
    {
    $data = Games::all();
      return view('index', ['data' => $data]);
    }
    public function releaseDate()
    {
      $data = Games::orderBy('uitgave_datum', 'desc')->get();
    return view('index', ['data' => $data]);
    }
}
