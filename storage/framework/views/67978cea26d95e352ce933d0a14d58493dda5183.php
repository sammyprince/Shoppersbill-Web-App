<?php $__env->startSection('title', config('app.name', 'ultimatePOS')); ?>

<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                margin-top: 10%;
            }
        .title {
                font-size: 84px;
            }
        .tagline {
                font-size:25px;
                font-weight: 300;
                text-align: center;
            }
    </style>
    <div class="title flex-center" style="font-weight: 600 !important;">
        <?php echo e(config('app.name', 'ultimatePOS'), false); ?>

    </div>
    <p class="tagline">
        <?php echo e(env('APP_TITLE', ''), false); ?>

    </p>
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/welcome.blade.php ENDPATH**/ ?>