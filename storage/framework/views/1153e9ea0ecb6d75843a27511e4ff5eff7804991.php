<?php if(session('logged_in_and_trying_to_access_register_url')): ?>
    <div class="alert alert-warning text-center" role="alert">
        <?php echo e(session('logged_in_and_trying_to_access_register_url')); ?>

    </div>
<?php endif; ?>



<?php $__env->startSection('content'); ?>
    <div class="col-md-8 blog-main">
        <h1>Publish a post</h1>
        <hr>
        
        <form method="POST" action="/posts">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" id="title" name="title" >
                <?php if($errors->has('title')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                <?php endif; ?><!-- TITLE ERROR MESSAGE -->
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" ></textarea>
                <?php if($errors->has('body')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('body')); ?></strong>
                    </span>
                <?php endif; ?><!-- TITLE ERROR MESSAGE -->
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        
        </form>
    </div><!--COL -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>