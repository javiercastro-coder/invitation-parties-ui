<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LugarController extends Controller
{
    public function crear(): View
    {
        return view('lugares.crear');
    }

    public function guardar(Request $request): RedirectResponse
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'ubicacion' => ['required', 'string'],
            'imagen' => ['nullable', 'string'],
        ]);

        Lugar::create($datos);

        return redirect()
            ->route('panel')
            ->with('exito', 'Lugar turístico guardado correctamente.');
    }
}
