<?php

namespace App\Http\Controllers;

use App\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function create()
    {
        return view('visual');
    }
    public function store()
    {
        $data = request()->validate([
           'nombre' => 'required',
           'email' => 'required',
           'consulta' => 'required',
        ]);
//        dd(\request()->all());
        Consulta::create($data);
        return redirect(route('visual'));
    }
}
