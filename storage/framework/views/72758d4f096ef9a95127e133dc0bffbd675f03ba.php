<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<h2>Autenticação de Usuário</h2>

<a href="/login">
    <input type="button" class="btn btn-primary" value="Sign In">
</a>
<a href="/register">
    <input type="button" class="btn btn-primary" value="Register">
</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunos/teste/resources/views/index.blade.php ENDPATH**/ ?>