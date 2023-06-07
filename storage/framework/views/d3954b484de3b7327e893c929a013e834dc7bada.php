

<?php $__env->startSection('title', 'Pembukuan ZAIA'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; color: white;">

<?php $__env->startSection('content'); ?>

<div class="card card-primary">
  <div class="card-header" style="color: black"><h4>Login Admin</h4></div>

  <div class="card-body">
    <form method="POST" action="/admin/login">
        <?php echo csrf_field(); ?>
      <div class="form-group">
      <?php if(session('message')): ?>
    <div class="alert alert-danger">
      <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?> 
        <label for="email" style="color: black">Nama</label>
        <input aria-describedby="emailHelpBlock" id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" placeholder="Masukkan Nama " tabindex="1" value="<?php echo e(old('name')); ?>" autofocus>
        <div class="invalid-feedback">
          <?php echo e($errors->first('email')); ?>

        </div>
        <?php if(App::environment('demo')): ?>
        <small id="emailHelpBlock" class="form-text text-muted">
            Email Demo: admin@example.com
        </small>
        <?php endif; ?>
      </div>
      <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label" style="color: black">Kata Sandi</label>
          <!-- <div class="float-right">
            <a href="/admin/gaun" class="text-small">
              Lupa Kata Sandi?
            </a>
          </div> -->
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Masukkan kata sandi" class="form-control<?php echo e($errors->has('password') ? ' is-invalid': ''); ?>" name="password" tabindex="2">
        <div class="invalid-feedback">
          <?php echo e($errors->first('password')); ?>

        </div>
        <?php if(App::environment('demo')): ?>
        <small id="passwordHelpBlock" class="form-text text-muted">
            Kata Sandi Demo: 1234
        </small>
        <?php endif; ?>
      </div>

      <!-- <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"<?php echo e(old('remember') ? ' checked': ''); ?>>
          <label class="custom-control-label" for="remember">Ingat Saya</label>
        </div>
      </div> -->

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Masuk
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
  Belum punya akun? <a href="/admin/register">Buat Akun</a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/login.blade.php ENDPATH**/ ?>