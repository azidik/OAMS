<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="impounding_id">Impounding ID:</label>
            <input type="text" name="impounding_id" id="impounding_id" class="form-control" value="<?php echo e(old('impounding_id', $impound->impounding_id)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="impounding_species">Species:</label>
            <input type="text" name="impounding_species" id="impounding_species" class="form-control" value="<?php echo e(old('impounding_species', $impound->impounding_species)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_breed">Breed:</label>
            <input type="text" name="impounding_breed" id="impounding_breed" class="form-control" value="<?php echo e(old('impounding_breed', $impound->impounding_breed)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_age">Age:</label>
            <input type="text" name="impounding_age" id="impounding_age" class="form-control" value="<?php echo e(old('impounding_age', $impound->impounding_age)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_gender">Gender:</label>
            <input type="text" name="impounding_gender" id="impounding_gender" class="form-control" value="<?php echo e(old('impounding_gender', $impound->impounding_gender)); ?>" readonly>
        </div>

         <div class="form-group">
            <label for="impounding_color">Color:</label>
            <input type="text" name="impounding_color" id="impounding_color" class="form-control" value="<?php echo e(old('impounding_color', $impound->impounding_color)); ?>" readonly>
        </div>

        <div class="form-group">
            <a href="<?php echo e(url('adopts')); ?>" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>