<?php

namespace App\Http\Controllers;
use App\Models\Games;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
  {
    $data = [
        'Games' => Games::all()
    
  ];
    return view('index', $data);
  }
}
