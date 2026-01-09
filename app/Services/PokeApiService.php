<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PokeApiService {
    protected $baseUrl;

    public function __construct() {
        $this->baseUrl = env('POKEAPI_BASE_URL');
    }

    public function getPokemonNameOrId($id) {
        $response = Http::get($this->baseUrl . "pokemon/" . $id);

        if (!$response) {
            throw new Exception("Error na busca", 1);
        }

        return json_decode($response, true);

    }


    public function getPokemonList($limit, $offset) {
        $response = Http::get($this->baseUrl . "pokemon/", [
            'limit' => $limit,
            'offset' => $offset,
        ]);

        if (!$response) {
            throw new Exception("Erro na paginação", 1);
        }

        return json_decode($response, true);

    }


}
