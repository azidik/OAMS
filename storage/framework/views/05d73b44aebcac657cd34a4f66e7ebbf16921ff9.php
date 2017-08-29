<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="list_id">ID:</label>
            <input type="text" name="list_id" id="list_id" class="form-control" value="<?php echo e(old('list_id', $list->list_id)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="list_name">Animal Name:</label>
            <select name="list_name" id="list_name" class="form-control" readonly>
                <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($register->reg_animal_id === $list->list_name): ?>
                    <option value="<?php echo e($register->reg_animal_id); ?>" selected="">
                        <?php echo e(ucfirst($register->reg_animal_name)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="list_owner">Owner:</label>
            <select name="list_owner" id="list_owner" class="form-control" readonly>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($user->user_id === $list->list_owner): ?>
                    <option value="<?php echo e($user->user_id); ?>" selected="">
                        <?php echo e(ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <a href="<?php echo e(url('lists')); ?>" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>