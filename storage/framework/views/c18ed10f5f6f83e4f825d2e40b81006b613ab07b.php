<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Service Getters</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Get ID</th>
            <th>Type of Service</th>
            <th>Animal Name</th>
            <th>Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $gets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($get->get_id); ?></td>
            <td><?php echo e($get->type->service_type); ?></td>
            <td><?php echo e($get->animalname->reg_animal_name); ?></td>
            <td><?php echo e($get->animalowner->last_name . ', ' . $get->animalowner->first_name); ?></td>
            <td><a href="<?php echo e(route('gets.show', $get->get_id)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>