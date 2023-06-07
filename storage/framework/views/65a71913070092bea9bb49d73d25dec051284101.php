

<?php $__env->startSection('title', 'Pembukuan ZAIA'); ?>

<?php $__env->startSection('container'); ?>
<div class="container" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg); color: white;">
    <div class="row">
        <div class="col-10">
            <h1 style="text-align: center">Ambil Uang</h1>
            <table class="table">
                <tbody>
                    <a href="/admin/ambiluang" class="btn btn-primary">Ambil Uang</a>
                    <table class="table" style="color: white;">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>

                        <?php $__currentLoopData = $ambiluang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <td><?php echo e($row->nama); ?></td>
                                <td><?php echo e(number_format($row->harga)); ?></td>
                                <td><?php echo e($row->jenis); ?></td>
                                <td><?php echo e(substr($row->created_at, 0, 10)); ?></td>
                                <td>
                                    <?php if(session('level')): ?>
                                    <a href="/admin/terjual/<?php echo e($row->id); ?>" class="btn btn-primary">detail</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/ambiluang/index.blade.php ENDPATH**/ ?>