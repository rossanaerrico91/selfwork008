<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionController extends Controller
{
    public function index()
    {
        $regioni = [
            ['name' => 'Abruzzo'],
            ['name' => 'Basilicata'],
            ['name' => 'Calabria'],
            ['name' => 'Campania'],
            ['name' => 'Emilia-Romagna'],
            ['name' => 'Friuli-Venezia Giulia'],
            ['name' => 'Lazio'],
            ['name' => 'Liguria'],
            ['name' => 'Lombardia'],
            ['name' => 'Marche'],
            ['name' => 'Molise'],
            ['name' => 'Piemonte'],
            ['name' => 'Puglia'],
            ['name' => 'Sardegna'],
            ['name' => 'Sicilia'],
            ['name' => 'Toscana'],
            ['name' => 'Trentino-Alto Adige'],
            ['name' => 'Umbria'],
            ['name' => 'Valle Aosta'],
            ['name' => 'Veneto']
        ];

        return response()->json($regioni);
    }
}
