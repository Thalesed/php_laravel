<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<h2>Sign In</h2>

<form action="/enter" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label for="user">Usuário</label>
        <input type="text" id="user" name="user">
    </div>
    <div>
        <label for="pass">Senha</label>
        <input type="text" id="pass" name="pass">
    </div>
    <input type="submit" value="Entrar">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunos/teste/resources/views/signIn.blade.php ENDPATH**/ ?>