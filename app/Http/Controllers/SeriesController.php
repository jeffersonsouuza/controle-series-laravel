<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request): string
    {
        $series = [
            'Elite',
            'Grey\'s Anatomy',
            'Sex Education'
        ];

        //retorna o documento html
//        return view('listar-series',
//            compact('series')  //seta a variável no documento html
//        );
        //outra forma:
        return view('series.index')->with('series', $series);

    }

    public function create(): string
    {
        return view('series.create');
    }
}
