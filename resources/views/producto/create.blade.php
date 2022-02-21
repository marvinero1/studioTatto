@extends('layouts.main')

@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark p-3">
                        <div class="card-header">
                            <h3 class="card-title">Registro Artículo</h3>
                        </div>
                        <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row" style="border: outset;margin-bottom:23px;">
                                    <div class="col-md-6"><br>
                                        <div class="form-group">
                                            <label for="nombre">Nombre Producto *</label>
                                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto"
                                                placeholder="Nombre Producto" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6"><br>
                                        <div class="form-group">
                                            <label for="num_comprobante">Marca *</label>
                                            <input type="text" class="form-control" id="marca" name="marca"
                                                placeholder="Marca" required>
                                        </div>
                                    </div>
                                    <p class="p-2"><strong> Los campos marcados con (*) son requeridos</strong> </p>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha">Precio</label>
                                        <input type="number" class="form-control" id="precio" name="precio"
                                            placeholder="Precio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se
                                                    recomienda<strong> 270 × 270 pixels</strong></p>
                                                <label for="file-upload" class="custom-file-upload">
                                                    <i class="fa fa-cloud"></i> Custom Upload
                                                </label>
                                                <input id="file-upload" type="file" name="imagen"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="{{url('/articulos')}}"><button class="btn  float-right" style="color: white"> <i class="fas fa-window-close"></i>
                                Cancelar</a>

                            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                                Guardar</button>
                        </div>
                    </form>
                </div>
    </section>
</div>

<style type="text/javascript">
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
