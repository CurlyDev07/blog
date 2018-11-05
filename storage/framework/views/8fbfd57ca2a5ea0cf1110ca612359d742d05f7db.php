<?php $__env->startSection('content'); ?>

<div class="col-sm-8">

    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control <?php echo e($errors->has('name')? ' is-invalid' : ''); ?>" required>
            <?php if($errors->has('name')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
        </div><!-- Name -->
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control <?php echo e($errors->has('email')? ' is-invalid' : ''); ?>" name="email" id="email" required>
                <?php if($errors->has('email')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div><!-- Email -->

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control <?php echo e($errors->has('password')? ' is-invalid' : ''); ?>" name="password" id="password" required>
                <?php if($errors->has('password')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        </div><!-- Password -->

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
        </div><!-- Password -->

        <button type="submit" class="btn btn-md btn-primary">Register</button>
    </form><!--FORM Registration -->
</div><!-- col -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>