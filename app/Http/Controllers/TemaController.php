<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemaController extends Controller
{
    public function index()
    {
        $temas = Tema::all();
        return view('temas.index', compact('temas'));
    }

    public function create()
{
    return view('temas.create');
}
};
