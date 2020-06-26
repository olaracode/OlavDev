<?php

namespace App\Http\Controllers;

use App\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function create()
    {
        return view('consultas/visual');
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
        return redirect('diseno')->with('message', 'Su consulta ha sido registrada');
    }
    public function edit($id)
    {
        $consulta = Consulta::find($id);
        return view('consultas.modify', compact('consulta', 'id'));
    }
    public function update($id)
    {
        $consulta = Consulta::find($id);
        $consulta->visto=true;
        $consulta->save();
        return redirect('admin');
    }
    public function delete($id)
    {
        $consulta = Consulta::find($id);
        $consulta->delete();
        return redirect('admin');
    }
}
