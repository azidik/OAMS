<?php $__env->startSection('content'); ?>
<div class="form-group">
    <a href="<?php echo e(url('/pending')); ?>" class="btn btn-primary">Back</a>
</div>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Adoption Requests</h1>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Animal Owner</th>
            <th>Adopted Animal</th>
            <th>Request Date</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $adoptrequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adoptrequest): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($adoptrequest->adopt_id); ?></td>
            <td><?php echo e($adoptrequest->adoptfn->last_name . ', ' . $adoptrequest->adoptfn->first_name); ?></td>
            <td><?php echo e($adoptrequest->adoptani->impounding_id); ?></td>
            <td><?php echo e($adoptrequest->adopt_requestDate); ?></td>
            <td><a href="<?php echo e(route('adoptrequests.show', $adoptrequest->imp_id)); ?>" class="btn btn-primary">Approve</a></td>
            <td><a href="<?php echo e(route('adoptrequests.show', $adoptrequest->imp_id)); ?>" class="btn btn-primary">Reject</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>