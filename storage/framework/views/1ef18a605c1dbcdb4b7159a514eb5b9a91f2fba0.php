<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>Adoption Made</h1>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Animal Owner</th>
            <th>Adopted Animal</th>
            <th>Adopted At</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $adopts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adopt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($adopt->adoption_id); ?></td>
            <td><?php echo e($adopt->adoptfn->last_name . ', ' . $adopt->adoptfn->first_name); ?></td>
            <td><?php echo e($adopt->adoptani->impounding_id); ?></td>
            <td><?php echo e($adopt->adopted_at); ?></td>
             <td><a href="<?php echo e(route('adopts.show', $adopt->adoption_id)); ?>" class="btn btn-primary">Show</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>