<?php
    $customFieldValue = get_field('group_653719efe8ff4n');
?>

<?php if(is_single() && 'jobs' === get_post_type()): ?>
<?php if($layout['acf_fc_layout'] === 'text_job'): ?>
                <div class="mb-4">
                    <h1 class="text-2xl font-bold mb-2">Rubrik: <?php echo e($layout['job_text']); ?></h1>
                    <p><?php echo e($layout['job_text']); ?></p>
                </div>
            <?php elseif($layout['acf_fc_layout'] === 'image_job'): ?>
                <img src="<?php echo e($layout['job_image']['url']); ?>" alt="<?php echo e($layout['job_image']['alt']); ?>">
            <?php endif; ?>
<?php else: ?>
    <?php $__currentLoopData = $customFieldValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($layout['acf_fc_layout'] === 'text_job'): ?>
                <div class="mb-4">
                    <h1 class="text-2xl font-bold mb-2">Rubrik: <?php echo e($layout['job_text']); ?></h1>
                    <p><?php echo e($layout['job_text']); ?></p>
                </div>
            <?php elseif($layout['acf_fc_layout'] === 'image_job'): ?>
                <img src="<?php echo e($layout['job_image']['url']); ?>" alt="<?php echo e($layout['job_image']['alt']); ?>">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if($customFieldValue): ?>

    <div class="my-4 p-4 bg-white rounded-lg shadow-md">
        <?php $__currentLoopData = $customFieldValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($layout['acf_fc_layout'] === 'text_job'): ?>
                <div class="mb-4">
                    <h1 class="text-2xl font-bold mb-2">Rubrik: <?php echo e($layout['job_text']); ?></h1>
                    <p><?php echo e($layout['job_text']); ?></p>
                </div>
            <?php elseif($layout['acf_fc_layout'] === 'image_job'): ?>
                <img src="<?php echo e($layout['job_image']['url']); ?>" alt="<?php echo e($layout['job_image']['alt']); ?>">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <?php $__env->startSection('content'); ?>
      <?php while(have_posts()): ?> <?php (the_post()); ?>
      <div class="my-4 p-4 bg-white rounded-lg shadow-md">
      <div class="mb-4">
        <?php echo $__env->first(['partials.content-single-' . get_post_type(), 'partials.content-single'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        </div>
      <?php endwhile; ?>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/robinkardell/Codes/wordpressonvalet/wp-content/themes/sage/resources/views/single.blade.php ENDPATH**/ ?>