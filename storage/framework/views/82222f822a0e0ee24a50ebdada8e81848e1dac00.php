

<?php $__env->startSection('title','Pembukuan'); ?>

<?php $__env->startSection('container'); ?>
<div class="container" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg); background-size: cover; background-position: center;">
    <div class="row">
        <div class="col-10">
            <h1 style="text-align: center; color: white;">Beli Barang</h1>
            <a href="/admin/belibarang" class="btn btn-primary">Tambah Barang</a>
            <table class="table" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $belibarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->jenis); ?></td>
                        <td><?php echo e(number_format($row->harga)); ?></td>
                        <td><?php echo e($row->stock); ?></td>
                        <td><?php echo e($row->nama); ?></td>
                        <?php if(session('level')): ?>
                        <td>
                            <form action="/admin/galeri/" method="post" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">delete</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/belibarang/index.blade.php ENDPATH**/ ?>