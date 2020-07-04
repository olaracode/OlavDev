@extends('layouts.admin')
@section('content')
    <div class="inner">
        <form>
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
                </thead>
                <tbody>
                @foreach( \App\Consulta::all() as $consulta)
                    <tr>
                        <th>
                            {{$consulta->nombre}}
                        </th>
                        <th>
                            {{$consulta->email}}
                        </th>
                        <th>
                            <a href="#">Ver</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>

@endsection