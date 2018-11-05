<?php $__env->startSection('content'); ?>

    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h1 class="blog-post-title"> <?php echo e(($solo_post->title)); ?> </h1> 
            <p class="blog-post-meta"><?php echo e($solo_post->user->name); ?> on <?php echo e($solo_post->created_at->toFormattedDateString()); ?></p>
            <p><?php echo e($solo_post->body); ?></p>
        </div><!-- /.blog-post -->

        <hr>
       
        <ul class="list-group">
            <?php $__currentLoopData = $solo_post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <?php echo e($comment->body); ?>

                    <strong class="float-right"><?php echo e($comment->created_at->diffForHumans()); ?></strong>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <hr>

        <form method="post" action="/post/<?php echo e($solo_post->id); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Add comment here"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send" class="btn btn-primary my-2">
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>