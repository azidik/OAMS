<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Registered Animals</h1>
<a href="<?php echo e(url('/registers/create')); ?>" class="btn btn-success">Add Registration</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($register->reg_animal_id); ?></td>
            <td><?php echo e($register->reg_animal_name); ?></td>
            <td><?php echo e($register->reg_animal_species); ?></td>
            <td><?php echo e($register->reg_animal_breed); ?></td>
            <td><?php echo e($register->reg_animal_age); ?></td>
            <td><?php echo e($register->reg_animal_gender); ?></td>
            <td><?php echo e($register->reg_animal_color); ?></td>
            <td><?php echo e($register->user->last_name . ', ' . $register->user->first_name); ?></td>
             <td><a href="<?php echo e(route('registers.show', $register->reg_animal_id)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>