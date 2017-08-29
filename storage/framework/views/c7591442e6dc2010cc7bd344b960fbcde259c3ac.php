<?php $__env->startSection('content'); ?>
<h1>Register Animal</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="<?php echo e(url('animal_registration')); ?>" method="POST" class="col-md-4">

    <?php echo $__env->make('animal_registration.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>