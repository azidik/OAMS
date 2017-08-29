<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Impounds</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Category</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Surrendered at</th>
            <th>Found at</th>
            <th>Impounded By</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $impounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $impound): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($impound->impounding_id); ?></td>
            <td><?php echo e($impound->category->category_type); ?></td>
            <td><?php echo e($impound->impounding_species); ?></td>
            <td><?php echo e($impound->impounding_breed); ?></td>
            <td><?php echo e($impound->impounding_age); ?></td>
            <td><?php echo e($impound->impounding_gender); ?></td>
            <td><?php echo e($impound->impounding_color); ?></td>
            <td><?php echo e($impound->impounding_surrendered_at); ?></td>
            <td><?php echo e($impound->impounding_place_found); ?></td>
            <td><?php echo e($impound->impoundedby->last_name . ', ' . $impound->impoundedby->first_name); ?></td>
            <td><a href="<?php echo e(route('impounds.show', $impound->impounding_id)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>