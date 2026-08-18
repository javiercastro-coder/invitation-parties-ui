<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request): RedirectResponse
    {
        $datos = $request->validate(
            [
                'nombre' => ['required', 'string', 'min:3'],
                'correo' => ['required', 'email'],
                'mensaje' => ['required', 'string', 'min:10'],
            ],
            [
                'nombre.required' => 'Escribe tu nombre completo.',
                'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
                'correo.required' => 'Escribe tu correo electrónico.',
                'correo.email' => 'Escribe un correo electrónico válido.',
                'mensaje.required' => 'Escribe un mensaje.',
                'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
            ],
        );

        return redirect()
            ->route('contacto')
            ->with('datos_contacto', $datos);
    }
}
