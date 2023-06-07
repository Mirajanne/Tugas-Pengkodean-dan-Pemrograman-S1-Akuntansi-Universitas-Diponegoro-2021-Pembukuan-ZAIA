

<?php $__env->startSection('title', 'Pembukuan ZAIA'); ?>

<?php $__env->startSection('container'); ?>
<div class="container" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg); background-size: cover; background-position: center;">
    <div class="row">
        <div class="col-10">
            <h1 style="text-align: center; color: white;">Home</h1>
            <a href="/admin/home" class="btn btn-primary">Tambah Anggota</a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Modal</th>
                            <th scope="col">Uang</th>
                            <?php if(session('level')): ?>
                            <th scope="col">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($row->nama); ?></td>
                            <td><?php echo e(number_format($row->harga)); ?></td>
                            <td><?php echo e(number_format($row->uang)); ?></td>
                            <?php if(session('level')): ?>
                            <td>
                                <form action="/admin/modal/<?php echo e($row->id); ?>" method="post" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">Untung</th>
                            <th scope="col">Modal</th>
                            <th scope="col">Pulang Modal</th>
                            <?php if(session('level')): ?>
                            <th scope="col">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(number_format($row->untung)); ?></td>
                            <td><?php echo e(number_format($row->modal)); ?></td>
                            <td><?php echo e(number_format($row->pulang)); ?></td>
                            <?php if(session('level')): ?>
                            <td>
                                <form action="/admin/uang/<?php echo e($row->id); ?>" method="post" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">Jenis</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Harga Satuan</th>
                            <?php if(session('level')): ?>
                            <th scope="col">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($row->jenis); ?></td>
                            <td><?php echo e($row->stock); ?></td>
                            <td><?php echo e(number_format($row->hargasatuan)); ?></td>
                            <?php if(session('level')): ?>
                            <td>
                                <form action="/admin/stock/<?php echo e($row->id); ?>" method="post" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/home/index.blade.php ENDPATH**/ ?>