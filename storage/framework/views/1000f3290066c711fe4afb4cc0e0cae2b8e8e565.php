<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="donor_id">ID:</label>
            <input type="text" name="donor_id" id="donor_id" class="form-control" value="<?php echo e(old('donor_id', $donate->donor_id)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="donor_first_name">First Name:</label>
            <input type="text" name="donor_first_name" id="donor_first_name" class="form-control" value="<?php echo e(old('donor_first_name', $donate->donor_first_name)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="donor_last_name">Last Name:</label>
            <input type="text" name="donor_last_name" id="donor_last_name" class="form-control" value="<?php echo e(old('donor_last_name', $donate->donor_last_name)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="donor_company">Company:</label>
            <input type="text" name="donor_company" id="donor_company" class="form-control" value="<?php echo e(old('donor_company', $donate->donor_company)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="donated">Donated:</label>
            <input type="text" name="donated" id="donated" class="form-control" value="<?php echo e(old('donated', $donate->donated)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="donation_quantity">Quantity:</label>
            <input type="text" name="donation_quantity" id="donation_quantity" class="form-control" value="<?php echo e(old('donation_quantity', $donate->donation_quantity)); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="donated_at">Donated At:</label>
            <input type="text" name="donated_at" id="donated_at" class="form-control" value="<?php echo e(old('donated_at', $donate->donated_at)); ?>" readonly>
        </div>

        <div class="form-group">
            <a href="<?php echo e(url('donates')); ?>" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>