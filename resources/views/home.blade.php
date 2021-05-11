@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Paises</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Zona Horaria</th>
                                <th scope="col">Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                                     @php

                                        class Pais
                                        {
                                            public $id;
                                            public $nombre;
                                            public $zona;

                                            public function __construct($id, $nombre, $zona)
                                            {
                                                $this->id = $id;
                                                $this->nombre = $nombre;
                                                $this->zona = $zona;
                                            }
                                        }

                                        $paises = array();
                                        $colombia = new Pais(1, "Colombia", "America/Bogota");
                                        $francia = new Pais(2, "Francia", "Europe/Paris");
                                        $singapur = new Pais(3, "Singapur", "Asia/Singapore");
                                        $rusia = new Pais(4, "Rusia", "Europe/Moscow");
                                        $alemania = new Pais(5, "Alemania", "Europe/Berlin");

                                        array_push($paises, $colombia);
                                        array_push($paises, $francia);
                                        array_push($paises, $singapur);
                                        array_push($paises, $rusia);
                                        array_push($paises, $alemania);

                                    @endphp
                                    @foreach ($paises as $pais)
                                    <tr>
                                        <th scope="row">{{ $pais->id }}</th>
                                        <td>{{ $pais->nombre }}</td>
                                        <td>  {{ $pais->zona }}</td> 
                                        <td>
                                            <a href="{{ url('pais/verhora/'.$pais->id) }}" class="btn btn-info">Ver Hora</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
             
                    </div>
                </div>
              
            </div>
        </div>
</div>
@endsection