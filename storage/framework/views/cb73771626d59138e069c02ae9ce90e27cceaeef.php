<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Available For Adoption</h1>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Color</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $foradopts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foradopt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($foradopt->impounding_id); ?></td>
            <td><?php echo e($foradopt->impounding_species); ?></td>
            <td><?php echo e($foradopt->impounding_breed); ?></td>
            <td><?php echo e($foradopt->impounding_age); ?></td>
            <td><?php echo e($foradopt->impounding_gender); ?></td>
            <td><?php echo e($foradopt->impounding_color); ?></td>
            <td><a href="<?php echo e(route('foradopts.show', $foradopt->impounding_id)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>