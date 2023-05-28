<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class VersionController extends Controller
{

    public function index()
    {
        $versions = Http::get('http://ddragon.leagueoflegends.com/api/versions.json')->collect();

        $result = [];

        foreach ($versions as $version) {
            if (Str::before($version, 'lolpatch_') == false) {
                $result[] = Str::after($version, 'lolpatch_') . '.1';
            } else {
                $result[] = $version;
            }
        }

        return view('version.index', ['versions' => $result]);
    }
}
