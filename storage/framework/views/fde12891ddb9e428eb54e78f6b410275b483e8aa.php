<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>



<h2>Register</h2>


<form action="/signUp" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label for="user">Usuário</label>
        <input type="text" id="user" name="user">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="pass">Senha</label>
        <input type="text" id="pass">
    </div>
    <div>
        <label for="cliente">Cliente:</label>
        <input type="radio" id="escola" name="cliente"><label for="escola">Escola</label></input>
        <input type="radio" id="fornecedor" name="cliente"><label for="fornecedor">Fornecedor</label></input>
    </div>
    <input type="submit">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunos/teste/resources/views/register.blade.php ENDPATH**/ ?>