<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChampionsController extends Controller
{
    public function champions($version)
    {
        $result = Http::get('http://ddragon.leagueoflegends.com/cdn/' . $version . '/data/en_US/champion.json')->collect();

        //return response()->json($result['data']);
        return view('champions.index', [
            'champions' => $result['data'],
            'version' => $version
        ]);
    }
}
