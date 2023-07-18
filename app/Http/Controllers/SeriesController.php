<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'The Witcher',
            'The Legend of Vox Machina',
            'The Lord of the Rings'
        ];

        return view('listar-series')->with('series',$series);
    }
}
