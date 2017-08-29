<?php $__env->startSection('content'); ?>
<div class="form-group">
    <a href="<?php echo e(url('/pending')); ?>" class="btn btn-primary">Back</a>
</div>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Registration Requests</h1>

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
            <th>Request Date</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $regrequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regrequest): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($regrequest->reg_id); ?></td>
            <td><?php echo e($regrequest->reg_animal_name); ?></td>
            <td><?php echo e($regrequest->reg_animal_species); ?></td>
            <td><?php echo e($regrequest->reg_animal_breed); ?></td>
            <td><?php echo e($regrequest->reg_animal_age); ?></td>
            <td><?php echo e($regrequest->reg_animal_gender); ?></td>
            <td><?php echo e($regrequest->reg_animal_color); ?></td>
            <td><?php echo e($regrequest->user->last_name . ', ' . $regrequest->user->first_name); ?></td>
            <td><?php echo e($regrequest->reg_requestDate); ?></td>
            <td><a href="<?php echo e(action('registration_requestController@approve', $regrequest->reg_id)); ?>" class="btn btn-primary">Approve</a></td>
            <td><a href="<?php echo e(route('regrequests.reject', $regrequest->reg_id)); ?>" class="btn btn-primary">Reject</a></td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>