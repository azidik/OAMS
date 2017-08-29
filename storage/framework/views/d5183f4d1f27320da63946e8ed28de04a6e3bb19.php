<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Dog Food</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Expiry</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $dFoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dFood): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($dFood->dog_id); ?></td>
            <td><?php echo e($dFood->dfood_category); ?></td>
            <td><?php echo e($dFood->dfood_quantity); ?></td>
            <td><?php echo e($dFood->dfood_expiry); ?></td>
            <td><a href="<?php echo e(route('dFoods.show', $dFood->dog_id)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>