<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $comentario = New Comentario;

        $comentario->texto = request('comment');

        $comentario->save();
    }

    public function show(Comentario $comentario)
    {
        //
    }

    public function edit(Comentario $comentario)
    {
        //
    }

    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    public function destroy(Comentario $comentario)
    {
        //
    }
}
