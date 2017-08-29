<?php $__env->startSection('content'); ?>
<script src="jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<h1>List of Donors</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Donor ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Donated..</th>
            <th>Quantity</th>
            <th>Donated at..</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $donates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donate): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($donate->donor_id); ?></td>
            <td><?php echo e($donate->donor_last_name . ', ' . $donate->donor_first_name); ?></td>
            <td><?php echo e($donate->donor_company); ?></td>
            <td><?php echo e($donate->donated); ?></td>
            <td><?php echo e($donate->donation_quantity); ?></td>
            <td><?php echo e($donate->donated_at); ?></td>
            <td><a href="<?php echo e(route('donates.show', $donate->donor_id)); ?>" class="btn btn-primary">Show</a></td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>