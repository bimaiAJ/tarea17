<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class ContactoController extends BaseController
{
    public function index()
    {
        return view('misviews.contacto');
    }
    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);
        return redirect(route('contactado'), 302);// Validar y enviar el correo
    }
    public function contacted(){
        return view('misviews.contactado');
    }
}
