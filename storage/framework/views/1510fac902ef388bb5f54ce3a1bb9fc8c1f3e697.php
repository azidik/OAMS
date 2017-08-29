<?php $__env->startSection('content'); ?>
<div style="
margin-top: 7%;
">
    
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron" id="register">
                <h2>Registration</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('regrequests')); ?>" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="user">
                <h2>Impounding</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('imprequests')); ?>" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="jumbotron" id="register">
                <h2>Adoption</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="<?php echo e(url('adoptrequests')); ?>" role="button">View requests &raquo;</a>
                </p>
            </div>
        </div>

  </div>
    <div class="row"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>