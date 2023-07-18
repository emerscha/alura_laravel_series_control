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
            'The Lord of the Rings',
            'Grey\'s Anatomy'
        ];

        return view('series.index')->with('series',$series);
    }

    public function create() {
        return view('series.create');
    }
}
