<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::orderBy('id')->get();
        return $contactos;
    }

    public function store(Request $request)
    {
        $contacto = Contacto::create($request->all());
        return $contacto;
    }

    public function show(Contacto $contacto)
    {
        return response()->json([Contacto::find($contacto->id)]);
    }

    public function update(Request $request, Contacto $contacto)
    {
        $contacto = Contacto::find($contacto->id);

        $contacto->update($request->all());
        $contacto->save();
        return $contacto;
    }

    public function destroy(Contacto $contacto)
    {
        Contacto::destroy($contacto->id);
        return "Contacto borrado";
    }
}
