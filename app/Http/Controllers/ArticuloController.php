<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticuloController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $articulos = Articulo::all();
        return view('articulos', [
            'articulos' => $articulos,
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('articuloCreate');
    }

    public function store(Request $request)
    {
        $articulo = new Articulo;

        $articulo->titulo = request('titulo');
        $articulo->contenido = request('contenido');

        $articulo->save();

        echo'<script type="text/javascript"> alert("Articulo creado correctamente"); </script>';

        $user = Auth::user();
        $articulos = Articulo::all();
        return view('articulos', [
            'articulos' => $articulos,
            'user' => $user
        ]);
    }

    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('detalleArticulo', ['articulo' => $articulo]);
    }

    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
    }
}
