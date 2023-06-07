

<?php $__env->startSection('title', 'Pembukuan ZAIA'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="background-image: url(https://i.pinimg.com/originals/38/a0/4a/38a04a7b051c9481ccf55bfa439f242f.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; color: white;">

<?php $__env->startSection('content'); ?>
<div class="card card-primary">
  <div class="card-header" style="color:black"><h4>Register</h4></div>

  <div class="card-body">
  <div class="form-group">
      <?php if(session('message')): ?>
    <div class="alert alert-danger">
      <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?> 
    <form method="POST" action="/admin/register/">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name" style="color:black">Name</label>
          <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" tabindex="1" placeholder="Full name" value="<?php echo e(old('name')); ?>" autofocus>
          <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

          </div>
        </div>
        <div class="form-group">
          <label for="level" style="color:black">Level</label>
          <select value="" class="form-control <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="level" placeholder="masukan level" name="level">
                  <option value="admin">Admin</option>
                  <option value="master">Master</option>
                </select>
          <div class="invalid-feedback">
            <?php echo e($errors->first('level')); ?>

          </div>
        </div>


      <div class="form-group">
        <label for="email" style="color:black">Email</label>
        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email address" name="email" tabindex="1" value="<?php echo e(old('email')); ?>" autofocus>
        <div class="invalid-feedback">
          <?php echo e($errors->first('email')); ?>

        </div>
      </div>

      <div class="form-group">
        <label for="password" class="control-label" style="color:black">Password</label>
        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid': ''); ?>" placeholder="Set account password" name="password" tabindex="2">
        <div class="invalid-feedback">
          <?php echo e($errors->first('password')); ?>

        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Register
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
 Already have an account? <a href="<?php echo e(url('admin/login')); ?>">login</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project Koding\pembukuan\resources\views/admin/register.blade.php ENDPATH**/ ?>