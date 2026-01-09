<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PokeApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('POKEAPI_BASE_URL');
    }

    public function getPokemonNameOrId($id)
    {
        $response = Http::get($this->baseUrl . 'pokemon/' . $id);

        if ($response->failed()) {
            throw new Exception('Erro na busca', 1);
        }

        return $response->json();
    }

    public function getPokemonList(int $limit, int $offset, bool $bulk = false): array
    {
        $response = Http::get($this->baseUrl . 'pokemon/', [
            'limit' => $limit,
            'offset' => $offset,
        ]);

        if ($response->failed()) {
            throw new Exception('Erro na paginação', 1);
        }

        if ($bulk) {
            $data = Cache::remember('poke.bulk.{$limit}.{$offset}', 100000, function () use ($response) {
                $pokemonList = $response->json();
                $bulkList = [];
                foreach ($pokemonList['results'] as $pokemon) {
                    $pokemonInfo = $this->getPokemonNameOrId($pokemon['name']);
                    $bulkList[] = [
                        'name' => $pokemon['name'],
                        'type' => $pokemonInfo['types'],
                        'skills' => $pokemonInfo['abilities'],
                    ];
                }
                return $bulkList;
            });
            return $data;

        } else {
            return $response->json();
        }
    }
}
