<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anotacion;
use App\Models\Tema;

class AnotacionController extends Controller
{
    public function index()
    {
        $anotaciones = Anotacion::orderBy('created_at', 'DESC')->paginate(10);

        return view('anotaciones.index', compact('anotaciones'));
    }

    public function create()
    {
        $temas = Tema::all();

        return view('anotaciones.create', compact('temas'));
    }

    public function store(Request $request)
    {
        $anotacion = new Anotacion;
        $anotacion->texto = $request->texto;
        $anotacion->tema_id = $request->tema_id;
        $anotacion->save();

        return redirect()->route('anotaciones.show', $anotacion->id);
    }

    public function show(Anotacion $anotacion)
    {
        return view('anotaciones.show', compact('anotacion'));
    }

    public function edit(Anotacion $anotacion)
    {
        $temas = Tema::all();

        return view('anotaciones.edit', compact('anotacion', 'temas'));
    }

    public function update(Request $request, Anotacion $anotacion)
    {
        $anotacion->texto = $request->texto;
        $anotacion->tema_id = $request->tema_id;
        $anotacion->save();

        return redirect()->route('anotaciones.show', $anotacion->id);
    }

    public function destroy(Anotacion $anotacion)
    {
        $anotacion->delete();

        return redirect()->route('anotaciones.index');
    }
};
