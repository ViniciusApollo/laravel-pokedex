<?php

namespace App\Http\Controllers\site;

use App\Services\PokeApiService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $PokeApiService;

    public function __construct(PokeApiService $pokeapi) {
        $this->PokeApiService = $pokeapi;
    }

    public function index () {
        return view('site.home.index');
    }

    public function search() {

    }

}
