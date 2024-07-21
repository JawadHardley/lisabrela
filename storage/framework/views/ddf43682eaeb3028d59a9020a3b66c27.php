
<?php $__env->startSection('content'); ?>

    <h2 class="">
        <p class="small">Welcome <?php echo e(Auth::user()->firstname); ?></p>
    </h2>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\mrwrong\Applications\Web Files\Assing\lisabrela\resources\views/admin/home.blade.php ENDPATH**/ ?>