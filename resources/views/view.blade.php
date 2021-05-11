@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">

                    @php
                     date_default_timezone_set($pais->zona);
                     $mytime = Carbon\Carbon::now();
                    @endphp

                    <div class="card-header"> Pais</div>
                        <div class="card-body"> 
                            <form  method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">{{  $pais->nombre }}</label>
                                    <input type="text" class="form-control" name="pais_nombre" 
                                    id="pais_nombre" aria-describedby="emailHelp"
                                    value="{{ ' Hora: ' . $mytime->toDateTimeString() }} ">
                                    @error('nombre')
                                    <span class="badge bg-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <a href="{{ url('home') }}" class="btn btn-info">Regresar</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection