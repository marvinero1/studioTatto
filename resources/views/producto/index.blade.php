@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <h1 style="text-align: center" class="mb-4 pt-3">Productos</h1>
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
                        type="search" placeholder="Buscador Nombre Imagen" aria-label="Search"
                        style="width: 55% !important;">&nbsp;&nbsp;
                    <button class="btn btn-outline-success " type="submit" style="border: 1px #3097D1 solid;">
                        <span class="search"></span>&nbsp;Buscar</button>
                </form>
            </div>
        </div>
        <div class="float-right">
            <a href="{{ route('productos.create')}}" class="btn btn-app" class="btn btn-danger btn-sm">
                <i class="fa fa-cubes" aria-hidden="true"></i> Crear Producto
            </a>
        </div>

        <br><br><br>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center;">Imagen</th>
                        <th style="text-align:center;">Nombre</th>
                        <th style="text-align:center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($producto as $productos)
                    <tr>
                        <td style="text-align:center;">
                            <img src="/{{ $productos->imagen }}" alt="{{ $productos->nombre }}" width="175px;"></td>

                        <td style="text-align:center;">{{ $productos->nombre }}</td>
                        {{-- <td style="text-align:center;">{{ $favoritos->user_id }}</td> --}}
                        <a class="btn btn-app " href="{{ route('productos.show',$productos->id ) }}">
                                    <i class="fas fa-eye"></i> Ver
                                </a>
                        <td style="text-align:center;">
                            <form action="{{ route('productos.destroy',$productos->id ) }}" method="POST"
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


            </table><br><br>
        </div>

        <div style="text-align: center !important;" class="justify-content-center">
            {{ $producto->links() }}
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
