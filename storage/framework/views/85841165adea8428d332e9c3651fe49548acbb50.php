<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<h2><?php echo e($user); ?></h2>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunos/teste/resources/views/profile.blade.php ENDPATH**/ ?>