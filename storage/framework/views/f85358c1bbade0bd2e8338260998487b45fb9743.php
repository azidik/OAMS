<?php echo e(csrf_field()); ?>


<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="form-group">
    <label for="reg_animal_name">Name:</label>
    <input type="text" name="reg_animal_name" id="reg_animal_name" placeholder="Animal Name" class="form-control" value="<?php echo e(old('reg_animal_name')); ?>">
</div>

<div class="form-group">
    <label for="reg_animal_species">Species:</label>
    <input type="text" name="reg_animal_species" id="reg_animal_species" placeholder="Animal Species" class="form-control" value="<?php echo e(old('reg_animal_species')); ?>">
</div>

<div class="form-group">
    <label for="reg_animal_breed">Breed:</label>
    <input type="text" name="reg_animal_breed" id="reg_animal_breed" placeholder="Animal Breed" class="form-control" value="<?php echo e(old('reg_animal_breed')); ?>">
</div>
<div class="form-group">
    <label for="reg_animal_age">Age:</label>
    <input type="text" name="reg_animal_age" id="reg_animal_age" placeholder="Animal Age" class="form-control" value="<?php echo e(old('reg_animal_age')); ?>">
</div>
<div class="form-group">
    <label for="reg_animal_gender">Gender:</label>
    <input type="text" name="reg_animal_gender" id="reg_animal_gender" placeholder="Animal Gender" class="form-control" value="<?php echo e(old('reg_animal_gender')); ?>">
</div>
<div class="form-group">
    <label for="reg_animal_color">Color:</label>
    <input type="text" name="reg_animal_color" id="reg_animal_color" placeholder="Animal Color" class="form-control" value="<?php echo e(old('reg_animal_color')); ?>">
</div>

<div class="form-group">
    <label for="animal_owner">Animal Owner:</label>
    <select name="animal_owner" id="animal_owner" placeholder="Name of Animal Owner" class="form-control">
        <option value=""></option>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($user->user_id); ?>"><?php echo e(ucfirst($user->last_name) . ', ' . ucfirst($user->first_name)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
