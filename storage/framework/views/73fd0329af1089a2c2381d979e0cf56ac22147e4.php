<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="animal_name">Animal Name:</label>
            <select name="animal_name" id="animal_name" class="form-control" readonly>
                <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($register->reg_animal_id === $schedule->animal_name): ?>
                    <option value="<?php echo e($register->reg_animal_id); ?>" selected="">
                        <?php echo e(ucfirst($register->reg_animal_name)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="type_of_service">Type of Service:</label>
            <select name="type_of_service" id="type_of_service" class="form-control" readonly>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($type->service_id === $schedule->type_of_service): ?>
                    <option value="<?php echo e($type->service_id); ?>" selected="">
                        <?php echo e(ucfirst($type->service_type)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="schedule_date">Schedule Date:</label>
            <input type="text" name="schedule_date" id="schedule_date" class="form-control" value="<?php echo e(old('schedule_date', $schedule->schedule_date)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="owner">Owner:</label>
            <select name="owner" id="owner" class="form-control" readonly>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($user->user_id === $schedule->owner): ?>
                    <option value="<?php echo e($user->user_id); ?>" selected="">
                        <?php echo e(ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)); ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <a href="<?php echo e(url('schedules')); ?>" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>