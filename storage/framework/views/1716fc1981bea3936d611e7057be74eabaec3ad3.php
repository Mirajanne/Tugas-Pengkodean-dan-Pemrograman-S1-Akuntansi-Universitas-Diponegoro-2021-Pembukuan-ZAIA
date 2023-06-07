

<?php $__env->startSection('title','Pembukuan ZAIA'); ?>

<?php $__env->startSection('container'); ?>
<div class="container" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg);">
  <div class="row">
    <div class="col-10">
      <h1 style="text-align: center; color: white;">Barang Terjual</h1>
      <a href="/admin/terjual" class="btn btn-primary">Jual Barang</a>
      <table class="table" style="color: white;">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Modal</th>
            <th scope="col">Untung</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <?php $__currentLoopData = $namapaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
          <tr>
            <td><?php echo e($row->nama); ?></td>
            <td><?php echo e($row->deskripsi); ?></td>
            <td><?php echo e(number_format($row->harga)); ?></td>
            <td><?php echo e(number_format($row->modal)); ?></td>
            <td><?php echo e(number_format($row->untung)); ?></td>
            <td><?php echo e($row->status); ?></td>
            <td>
              <a href="/admin/terjual/<?php echo e($row->id); ?>" class="btn btn-primary">detail</a>
            </td>
          </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/terjual/index.blade.php ENDPATH**/ ?>