<?php $__env->startSection('content'); ?>
<div style="
margin-top: 7%;
">
    
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron" id="register">
                <h2>Pending Requests</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('/pending')); ?>" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="user">
                <h2>Users</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('users')); ?>" role="button">View users &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="register">
                <h2>Registered Animals</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('registers')); ?>" role="button">View animals &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="list">
                <h2>Animal List</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('lists')); ?>" role="button">View animals &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="foradopt">
                <h2>Up for Adoption</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('foradopts')); ?>" role="button">View animals &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="adopt">
                <h2>Adoption</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('adopts')); ?>" role="button">View &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="impound">
                <h2>Impound Animals</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('impounds')); ?>" role="button">View animals &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="dFood">
                <h2>Dog Food</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('dFoods')); ?>" role="button">View dog food &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="cFood">
                <h2>Cat Food</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('cFoods')); ?>" role="button">View cat food &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="donor">
                <h2>Donor</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('donates')); ?>" role="button">View donor &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="schedule">
                <h2>Schedule</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('schedules')); ?>" role="button">View schedule &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="schedule">
                <h2>Services Getters</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('gets')); ?>" role="button">View &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="schedule">
                <h2>Reports</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('reports')); ?>" role="button">View reports &raquo;</a>
                </p>
            </div>
        </div>

  </div>
    <div class="row"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>