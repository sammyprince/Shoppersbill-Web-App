<?php $__env->startSection('title', 'Welcome - POS Installation'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h1 class="page-header text-center"><?php echo e(config('app.name', 'POS'), false); ?></h1>

        <div class="col-md-8 col-md-offset-2">
          <h3 class="text-success">Great! <br/>Your application is succesfully installed.</h3>
          <hr>
          <p>All the application details is saved in <b>.env</b> file. You can change them anytime there.</p>

          <p>Start by registering your business <a href="<?php echo e(route('business.getRegister'), false); ?>">here</a>.</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.install', ['no_header' => 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/install/success.blade.php ENDPATH**/ ?>