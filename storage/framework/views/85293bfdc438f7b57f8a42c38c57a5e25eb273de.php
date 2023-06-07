

<?php $__env->startSection('title', 'Pembukuan'); ?>

<?php $__env->startSection('container'); ?>
<div class="container" style="background: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg)">
    <div class="row">
        <div class="col-10" style="color: white;">
            <h1 style="text-align: center">Detail Jual Barang</h1>
            <table class="table">
                <tbody>
                    <table class="table" style="color: white;">
                        <?php if(session('untung')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('untung')); ?>

                        </div>
                        <?php endif; ?>
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Modal</th>
                                <th scope="col">Untung</th>
                            </tr>
                        </thead>
                        <a href="/terjual" class="btn btn-danger">Kembali</a>
                        <?php $__currentLoopData = $data[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <td><?php echo e($row->nama); ?></td>
                                <td><?php echo e($row->deskripsi); ?></td>
                                <td><?php echo e(number_format($row->harga)); ?></td>
                                <td><?php echo e(number_format($row->modal)); ?></td>
                                <td><?php echo e(number_format($row->untung)); ?></td>
                                <?php
                                $id_jual = $row->id;
                                $status = $row->status;
                                ?>
                                <td>
                                    <?php if($row->modal == 0): ?>
                                    <form action="/admin/jual/delete/<?php echo e($row->id); ?>" method="post" class="d-inline">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($row->status != 'Selesai' ): ?>
                                    <form action="/admin/jual/selesai" method="post" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" value="<?php echo e($id_jual); ?>" id="id_jual" name="id_jual">
                                        <input type="hidden" value="<?php echo e($row->nama); ?>" id="nama" name="nama">
                                        <button type="submit" class="btn btn-primary">Selesai</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if(session('surat')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('surat')); ?>

                        </div>
                        <?php endif; ?>

                        <?php if($status != 'Selesai'): ?>
                        <table class="table">
                            <tbody>
                                <table class="table" style="color: white;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col"></th>
                                            <th scope="col">Deskripsi Biaya</th>
                                            <th scope="col">Biaya Tambah</th>
                                            <!-- <th scope="col">harga</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>

                                            <form action="/admin/jual/" method="post" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <td width="25%">
                                                    <select value="<?php echo e(old('jenis')); ?>" class="form-control <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jenis" placeholder="masukan jenis" name="jenis">
                                                        <?php $__currentLoopData = $data[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($row->jenis); ?>"><?php echo e($row->jenis); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="hidden" value="<?php echo e($id_jual); ?>" id="id_jual" name="id_jual">
                                                    <input type="Number" min="1" value="<?php echo e(old('stock')); ?>" class="form-control <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="stock" placeholder="masukan stock" name="stock">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary">+</button>
                                                </form>
                                                </td>
                                                <form action="/admin/biayatambah/" method="post" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <td><input type="Text" min="1" value="<?php echo e(old('deskripsi')); ?>" class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="deskripsi" placeholder="masukan deskripsi" name="deskripsi"></td>
                                                    <td>
                                                        <input type="hidden" value="<?php echo e($id_jual); ?>" id="id_jual" name="id_jual">
                                                        <input type="Number" min="1" value="<?php echo e(old('harga')); ?>" class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="harga" placeholder="masukan harga" name="harga">
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary">+</button>
                                                    </form>
                                                </td>
                                        </tr>
                                    </tbody>
                                    <?php endif; ?>
                                    <tbody>
                                        <table class="table" style="color: white;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Jenis</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Harga modal</th>
                                                </tr>
                                            </thead>

                                            <?php $__currentLoopData = $data[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo e($row->jenis); ?></td>
                                                    <td><?php echo e($row->stock); ?></td>
                                                    <td><?php echo e(number_format($row->harga)); ?></td>
                                                    <td>
                                                        <?php if($status != 'Selesai' ): ?>
                                                        <form action="/admin/jual/<?php echo e($row->id); ?>" method="post" class="d-inline">
                                                            <?php echo method_field('delete'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" value="<?php echo e($row->id_jual); ?>" id="id_jual" name="id_jual">
                                                            <button type="submit" class="btn btn-danger">delete</button>
                                                        </form>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <tbody>
                                                <table class="table" style= "color: white;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Biaya Tambahan</th>
                                                        </tr>
                                                    </thead>

                                                    <?php $__currentLoopData = $data[3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo e($row->deskripsi); ?></td>
                                                            <td><?php echo e(number_format($row->harga)); ?></td>
                                                            <td>
                                                                <?php if($status != 'Selesai' ): ?>
                                                                <form action="/admin/biayatambah/delete/<?php echo e($row->id); ?>" method="post" class="d-inline">
                                                                    <?php echo method_field('delete'); ?>
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" value="<?php echo e($row->id_jual); ?>" id="id_jual" name="id_jual">
                                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                                </form>
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </table>
                                    </tbody>
                                </table>
                            </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/terjual/show.blade.php ENDPATH**/ ?>