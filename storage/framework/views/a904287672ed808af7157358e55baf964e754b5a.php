<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<?php if(auth()->guard()->check()): ?>
<p><?php echo e($user->name); ?></p>
<form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
    <a href="/logout" onclick="event.PreventDefault();this.closest('form').submit();"> Sair</a>
</form>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunos/teste/resources/views/dashboard.blade.php ENDPATH**/ ?>