<?php $__env->startSection('content'); ?>

    <div class="col-md-8 blog-main">
            
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Posts
        </h3>
<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="/post/<?php echo e($post->id); ?>" id="post-title"><?php echo e($post->title); ?></a>
            </h2>
            <p class="blog-post-meta">Post on <?php echo e($post->created_at->toFormattedDateString()); ?> by <?php echo e($post->user->name); ?>

            <p><?php echo e($post->body); ?></p>
            <hr>
        </div><!-- /.blog-post -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>