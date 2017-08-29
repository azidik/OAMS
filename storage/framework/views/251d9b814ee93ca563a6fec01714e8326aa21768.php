<?php $__env->startSection('content'); ?>
<h1>Pending Requests</h1>
<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Requested for</th>
            <th>Username</th>
            <th>Name</th>
            <th>Requested at</th>
            
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pendings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pending): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($pending->pending_id); ?></td>
            <td><?php echo e($pending->requested->type); ?></td>
            <td><?php echo e($pending->uname->username); ?></td>
            <td><?php echo e($pending->lname->last_name . ', ' . $pending->fname->first_name); ?></td>
            <td><?php echo e($pending->requested_at); ?></td>
             <td><a href="<?php echo e(route('pendings.show', $pending->pending_id)); ?>" class="btn btn-primary">Show</a></td>
             <td><a href="<?php echo e(route('pendings.show', $pending->pending_id)); ?>" class="btn btn-primary">Approve</a></td>
             <td><a href="<?php echo e(route('pendings.show', $pending->pending_id)); ?>" class="btn btn-primary">Decline</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>