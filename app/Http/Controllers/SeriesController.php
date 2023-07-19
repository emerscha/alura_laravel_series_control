<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //$series = Serie::all();
        $series = Serie::query()->orderBy('nome','desc')->get();

        return view('series.index')->with('series',$series);
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');
    }
}
