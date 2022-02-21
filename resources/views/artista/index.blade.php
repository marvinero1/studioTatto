@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <h1 style="text-align: center" class="mb-4 pt-3">Artistas</h1>
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
                        type="search" placeholder="Buscador Nombre Artista" aria-label="Search"
                        style="width: 55% !important;">&nbsp;&nbsp;
                    <button class="btn btn-outline-success " type="submit" style="border: 1px #3097D1 solid;">
                        <span class="search"></span>&nbsp;Buscar</button>
                </form>
            </div>
        </div>
        <div class="float-right">
            <button class="btn btn-app" data-toggle="modal" data-target="#modalImagen" class="btn btn-danger btn-sm">
                <i class="fa fa-users" aria-hidden="true"></i> Crear Artista
            </button>
        </div>

        <br><br><br>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center;">Imagen</th>
                        <th style="text-align:center;">Artista</th>
                        <th style="text-align:center;">Rol</th>
                        <th style="text-align:center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artista as $artistas)
                    <tr>
                        <td style="text-align:center;">
                            <img src="/{{ $artistas->imagen }}" alt="{{ $artistas->nombre }}"
                            width="125px;"></td>

                        <td style="text-align:center;">{{ $artistas->nombre_artista }}</td>
                        <td style="text-align:center;">{{ $artistas->rol }}</td>


                        <td style="text-align:center;">

                            <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalShow{{$artistas->id}}">
                                <i class="fas fa-eye"></i> Ver
                            </button>

                            <form action="{{ route('artistas.destroy',$artistas->id ) }}" method="POST"
                                accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                    onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fas fa-trash"
                                        aria-hidden="true"></i> Eliminar</button>
                            </form>

                            <!-- Modal SHOW-->
                            <div class="modal fade" id="exampleModalShow{{$artistas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Artista</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                        <div class="modal-body">

                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="nombre_artista"  placeholder="{{$artistas->nombre_artista}}" disabled>
		                                    </div>
                                    	</div>
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Rol</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="facebook" placeholder="{{$artistas->rol}}" disabled>
		                                    </div>
                                    	</div>
                                    </div>

                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Facebook</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="facebook" placeholder="{{$artistas->facebook}}" disabled>
		                                    </div>
                                    	</div>
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Instagram</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="instagram" placeholder="{{$artistas->instagram}}" disabled>
		                                    </div>
                                    	</div>
                                    </div>

                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Twitter</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="twitter" placeholder="{{$artistas->twitter}}" disabled>
		                                    </div>
                                    	</div>
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Whatsapp</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="whatsapp" placeholder="{{$artistas->whatsapp}}" disabled>
		                                    </div>
                                    	</div>
                                    </div>

                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Telegram</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="telegram" placeholder="{{$artistas->telegram}}" disabled>
		                                    </div>
                                    	</div>
                                    </div>


                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 600px !important;">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <div class="text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">
                                        Crear Artista</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <form action="{{route('artistas.store')}}" method="POST" enctype="multipart/form-data"
                                    style="margin-block-end:-1em !important;">
                                    {{ csrf_field() }}
                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="nombre_artista">
		                                    </div>
                                    	</div>
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Rol</span>
		                                        </div>
		                                       <select class="form-control">
													<option value=""></option>
													<option value="Tatuador">Tatuador</option>
													<option value="Especialista en piercings">Especialista en piercings</option>
													<option value="Arte Corporal">Arte Corporal</option>

												</select>
		                                    </div>
                                    	</div>
                                    </div>

                                      <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Facebook</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="facebook">
		                                    </div>
                                    	</div>
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Instagram</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="instagram">
		                                    </div>
                                    	</div>
                                    </div>

                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Twitter</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="twitter">
		                                    </div>
                                    	</div>
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Whatsapp</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="whatsapp">
		                                    </div>
                                    	</div>
                                    </div>

                                    <div class="row">
                                    	<div class="col">
                                    		<div class="input-group mb-3 pt-3">
		                                        <div class="input-group-prepend">
		                                          <span class="input-group-text" id="inputGroup-sizing-default">Telegram</span>
		                                        </div>
		                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
		                                        name="telegram">
		                                    </div>
                                    	</div>
                                    </div>

                                    {{-- @if(Auth::user())
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    @endif --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se
                                                    recomienda<strong> 1920 × 1080 pixels</strong></p>
                                                <label for="file-upload" class="custom-file-upload">
                                                    <i class="fa fa-cloud"></i> Custom Upload
                                                </label>
                                                <input id="file-upload" type="file" name="imagen"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: block;">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary"
                                                style="width: 100% !important; "><i class="fa fa-save"></i>&nbsp;
                                                Guardar</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </table><br><br>
        </div>

        <div style="text-align: center !important;" class="justify-content-center">
            {{ $artista->links() }}
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
