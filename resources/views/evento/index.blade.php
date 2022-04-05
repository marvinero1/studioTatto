@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <h1 style="text-align: center" class="mb-4 pt-3">Eventos</h1>
    <div class="content">
        @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="col-md-6 float-left">
            <div class="input-group col-md-8 float-left">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fas fa-search"></i></span>
                </div>
                <form style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                    <input type="text" aria-describedby="basic-addon1" name="buscarpor" class="form-control "
                        type="search" placeholder="Buscador Titulo" aria-label="Search"
                        style="width: 55% !important;">&nbsp;&nbsp;
                    <button class="btn btn-outline-success " type="submit" style="border: 1px #3097D1 solid;">
                        <span class="search"></span>&nbsp;Buscar</button>
                </form>
            </div>
        </div>
        <div class="float-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Crear Evento
            </button>
        </div><br><br><br>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center;">Imagen</th>
                        <th style="text-align:center;">Titulo</th>
                        <th style="text-align:center;">Fecha Evento</th>
                        <th style="text-align:center;">Creador</th>
                        <th style="text-align:center;">Descripcion</th>
                        <th style="text-align:center;">Creacion</th>
                        <th style="text-align:center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evento as $eventos)
                    <tr>
                        <td style="text-align:center;">
                            <img src="/{{ $eventos->imagen }}" alt="{{ $eventos->titulo }}" width="150px;">
                        </td>
                        <td style="text-align:center;">{{ $eventos->titulo }}</td>
                        <td style="text-align:center;">{{ $eventos->fecha }}</td>
                        <td style="text-align:center;">{{ $eventos->posteador }}</td>
                        <td style="text-align:center;">{{ $eventos->detalle }}</td>
                        <td style="text-align:center;">{{ $eventos->created_at }} </td>
                        
                        <td style="text-align:center;">
                            <form action="{{ route('eventos.destroy',$eventos->id ) }}" method="POST"
                                accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                    onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fas fa-trash"
                                        aria-hidden="true"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Creación de Evento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('eventos.store')}}" method="POST" enctype="multipart/form-data"
                                    style="margin-block-end:-1em !important;">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3 pt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Titulo
                                                        Evento *</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Default"
                                                    aria-describedby="inputGroup-sizing-default" name="titulo">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3 pt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Fecha
                                                        Evento *</span>
                                                </div>
                                                <input type="date" class="form-control" aria-label="Default"
                                                    aria-describedby="inputGroup-sizing-default" name="fecha">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3 pt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-default">Creador de Evento *</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Default"
                                                    aria-describedby="inputGroup-sizing-default" name="posteador">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 pt-3">
                                                <div class="form-group">
                                                    <label for="descripcion">Descripción</label>
                                                    <textarea class="form-control" id="detalle" rows="3"
                                                        name="detalle"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se
                                                    recomienda, entre<strong> 370 × 450 a 370 * 270 pixels</strong></p>
                                                <label for="file-upload" class="custom-file-upload">
                                                    <i class="fa fa-cloud"></i> Custom Upload
                                                </label>
                                                <input id="file-upload" type="file" name="imagen" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: block;">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary"
                                                style="width: 100% !important; "><i class="fa fa-save"></i>&nbsp;
                                                Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </table><br><br>
        </div>

        <div style="text-align: center !important;" class="justify-content-center">
            {{ $evento->links() }}
        </div>
    </div>
</div>
<style>
    input[type="file"] {
        display: none;
    }
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>
@endsection