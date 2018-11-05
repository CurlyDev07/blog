<?php if(session('logged_in_and_trying_to_access_register_url')): ?>
    <div class="alert alert-warning text-center" role="alert">
        <?php echo e(session('logged_in_and_trying_to_access_register_url')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <div class="col-sm-8">

        <h1>Sign In</h1>
        <form action="<?php echo e(route('login.post')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control">
            </div><!-- Email -->

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div><!-- Password -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        
    </div><!-- col-sm-8 -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>