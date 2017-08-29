<?php $__env->startSection('content'); ?>
    

 <div class="container-fluid">
 <div class="row">

 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-heading">Login</div>
 <div class="panel-body">
                    
     <!-- <?php if(count($errors) > 0): ?>
     <div class="alert alert-danger">
     <strong>Whoops! </strong> There were some problems with your input. <br> <br>
     <ul>
    
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
         <li><?php echo e($error); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
     </ul>
     </div>
     <?php endif; ?> -->

 <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
    <?php echo e(csrf_field()); ?>

<!-- username -->
 <div class="form-group <?php echo e($errors->has('username') ? ' has-error' : ''); ?>" >
    <label class="col-md-4 control-label" for="username">Username</label>
    <div class="col-md-6">
        <input type="text" id="username" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

        <?php if($errors->has('username')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('username')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>
<!-- password -->
<div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>" >
    <label class="col-md-4 control-label" for="password">Password</label>
    <div class="col-md-6">
        <input type="password" id="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" required autofocus>

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary" style="margin-right: 15px;">Login
        </button>

        <a href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password? </a>

    </div>
</div>
</form>
<button href="<?php echo e(url('/register')); ?>" class="btn btn-primary" style="margin-right: 15px;">Register
        </button>
</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>