<?php

namespace App\Http\Controllers\site;

use App\Services\PokeApiService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $pokeApiService;

    public function __construct(PokeApiService $pokeapi) {
        $this->pokeApiService = $pokeapi;
    }

    public function index () {

        $pokemonListInfo = [];
        $pokemons = $this->pokeApiService->getPokemonList(20, 1, true);
       
        return view('site.home.index', compact('pokemons'));
    }

    public function search() {

    }

}
