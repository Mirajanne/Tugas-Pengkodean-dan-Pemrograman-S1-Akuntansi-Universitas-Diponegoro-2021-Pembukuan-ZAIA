

<?php $__env->startSection('title','Pembukuan'); ?>

<?php $__env->startSection('container'); ?>
<div class="contianer" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg); color: white;">
    <div class="row">
    <div class="col-10">
    <h1 style="text-align: center">Produk Gagal</h1>
    <table class="table">
  <tbody>
  <a href="/admin/produkgagal" class="btn btn-primary">Tambah Produk</a>
  <table class="table" style="color: white;">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Stock</th>
      <th scope="col">Minus</th>
    </tr>
  </thead>

  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
      <td><?php echo e($row->nama); ?></td>
      <td><?php echo e($row->jenis); ?></td>
      <td><?php echo e($row->stock); ?></td>
      <td><?php echo e(number_format($row->harga)); ?></td>
      <td>
      <?php if(session('level')): ?>
    <a href="/admin/terjual/<?php echo e($row->id); ?>" class="btn btn-primary">detail</a>
  <?php endif; ?>
      </td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/produkgagal/index.blade.php ENDPATH**/ ?>