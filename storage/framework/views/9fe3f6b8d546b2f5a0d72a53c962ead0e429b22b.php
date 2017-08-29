<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="user_id">ID:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="<?php echo e(old('user_id', $user->user_id)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo e(old('username', $user->username)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" class="form-control" value="<?php echo e(old('password', $user->password)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo e(old('first_name', $user->first_name)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo e(old('last_name', $user->last_name)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo e(old('email', $user->email)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo e(old('address', $user->address)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="contact_no">Contact No.:</label>
            <input type="text" name="contact_no" id="contact_no" class="form-control" value="<?php echo e(old('contact_no', $user->contact_no)); ?>" readonly>
        </div>

        <div class="form-group">
            <a href="<?php echo e(url('users')); ?>" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>