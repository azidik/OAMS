<?php $__env->startSection('content'); ?>
<div class="form-group">
    <a href="<?php echo e(url('/pending')); ?>" class="btn btn-primary">Back</a>
</div>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Impounding Requests</h1>
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
            <th>Found at</th>
            <th>Impounded By</th>
            <th>Request Date</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $imprequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imprequest): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($imprequest->imp_id); ?></td>
            <td><?php echo e($imprequest->category->category_type); ?></td>
            <td><?php echo e($imprequest->impounding_species); ?></td>
            <td><?php echo e($imprequest->impounding_breed); ?></td>
            <td><?php echo e($imprequest->impounding_age); ?></td>
            <td><?php echo e($imprequest->impounding_gender); ?></td>
            <td><?php echo e($imprequest->impounding_color); ?></td>
            <td><?php echo e($imprequest->impounding_place_found); ?></td>
            <td><?php echo e($imprequest->impoundedby->last_name . ', ' . $imprequest->impoundedby->first_name); ?></td>
            <td><?php echo e($imprequest->imp_requestDate); ?></td>
            <td><a href="<?php echo e(route('imprequests.show', $imprequest->imp_id)); ?>" class="btn btn-primary">Approve</a></td>
            <td><a href="<?php echo e(route('imprequests.show', $imprequest->imp_id)); ?>" class="btn btn-primary">Reject</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>