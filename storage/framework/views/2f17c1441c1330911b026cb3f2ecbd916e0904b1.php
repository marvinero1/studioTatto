<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <h1 style="text-align: center" class="mb-4 pt-3">Productos</h1>
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
            <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-app" class="btn btn-danger btn-sm">
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
                        <th style="text-align:center;">Marca</th>
                        <th style="text-align:center;">Precio</th>
                
                        <th style="text-align:center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align:center;">
                            <img src="/<?php echo e($productos->imagen); ?>" alt="<?php echo e($productos->nombre); ?>" width="150px;"></td>

                        <td style="text-align:center;"><?php echo e($productos->nombre_producto); ?></td>
                        <td style="text-align:center;"><?php echo e($productos->marca); ?></td>
                        <td style="text-align:center;"><?php echo e($productos->precio); ?> Bs.</td>

                        <td style="text-align:center;">
                            
                            <form action="<?php echo e(route('productos.destroy',$productos->id )); ?>" method="POST"
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


            </table><br><br>
        </div>

        <div style="text-align: center !important;" class="justify-content-center">
            <?php echo e($producto->links()); ?>

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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\studioTatto\resources\views/producto/index.blade.php ENDPATH**/ ?>