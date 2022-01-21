<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function all()
    {
        $subtitulo = "Cidades";
        $cidades   = ['Poá', 'Suzano', "Ferraz"];
        return view("admin.cidades.index", compact('subtitulo', 'cidades'));
    }
}
