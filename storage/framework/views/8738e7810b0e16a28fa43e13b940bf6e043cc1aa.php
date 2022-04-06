<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <h1 style="text-align: center" class="mb-4 pt-3">Carusel</h1>
    <div class="content">
        <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
        <?php endif; ?>
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
            <button class="btn btn-app" data-toggle="modal" data-target="#modalImagen" class="btn btn-danger btn-sm">
                <i class="fa fa-image" aria-hidden="true"></i> Crear Imagen
            </button>
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
                    <?php $__currentLoopData = $carusel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carusels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align:center;">
                            <img src="/<?php echo e($carusels->imagen); ?>" alt="<?php echo e($carusels->nombre); ?>" width="175px;"></td>

                        <td style="text-align:center;"><?php echo e($carusels->nombre); ?></td>
                        
                        <td style="text-align:center;">
                            <form action="<?php echo e(route('carusel.destroy',$carusels->id )); ?>" method="POST"
                                accept-charset="UTF-8" style="display:inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                    onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fas fa-trash"
                                        aria-hidden="true"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

                <div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 370px !important;">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <div class="text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">
                                        Añadir Imagen</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <form action="<?php echo e(route('carusel.store')); ?>" method="POST" enctype="multipart/form-data"
                                    style="margin-block-end:-1em !important;">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="input-group mb-3 pt-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
                                        name="nombre">
                                    </div>
                                    

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
            <?php echo e($carusel->links()); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\studioTatto\resources\views/carusel/index.blade.php ENDPATH**/ ?>