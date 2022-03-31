<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $pelicula = Pelicula::all();
        return $pelicula;
    }
}
