<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Schedules</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Animal Name</th>
            <th>Service Type</th>
            <th>Schedule Date</th>
            <th>Owner</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($schedule->animalname->reg_animal_name); ?></td>
            <td><?php echo e($schedule->type->service_type); ?></td>
            <td><?php echo e($schedule->schedule_date); ?></td>
            <td><?php echo e($schedule->animalowner->last_name . ', ' . $schedule->animalowner->first_name); ?></td>
            <td><a href="<?php echo e(route('schedules.show', $schedule->animal_name)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>