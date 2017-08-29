<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="get_id">ID:</label>
            <input type="text" name="get_id" id="get_id" class="form-control" value="<?php echo e(old('get_id', $get->get_id)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="get_service_type">Type of Service:</label>
            <select name="get_service_type" id="get_service_type" class="form-control" readonly>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($type->service_id === $get->get_service_type): ?>
                    <option value="<?php echo e($type->service_id); ?>" selected="">
                        <?php echo e(ucfirst($type->service_type)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="get_animal_name">Animal Name:</label>
            <select name="get_animal_name" id="get_animal_name" class="form-control" readonly>
                <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($register->reg_animal_id === $get->get_animal_name): ?>
                    <option value="<?php echo e($register->reg_animal_id); ?>" selected="">
                        <?php echo e(ucfirst($register->reg_animal_name)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="get_owner">Owner:</label>
            <select name="get_owner" id="get_owner" class="form-control" readonly>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($user->user_id === $get->get_owner): ?>
                    <option value="<?php echo e($user->user_id); ?>" selected="">
                        <?php echo e(ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        

        <div class="form-group">
            <a href="<?php echo e(url('gets')); ?>" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>