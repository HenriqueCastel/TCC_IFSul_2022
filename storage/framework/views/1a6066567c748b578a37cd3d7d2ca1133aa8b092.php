

<?php $__env->startSection('titulo', 'Detalhes do Usuário'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="card">
        <h5 class="card-header">Detalhes do Usuário <?php echo e($client->nome); ?></h5>
            <div class="card-body">
                <p><strong>ID: </strong> <?php echo e($client->id); ?></p>
                <p><strong>Email: </strong> <?php echo e($client->email); ?></p>
                <p><strong>Senha: </strong> <?php echo e($client->senha); ?></p>
                <p><strong>Nome Completo: </strong> <?php echo e($client->nome); ?></p>
                <p><strong>Idade: </strong> <?php echo e($client->idade); ?></p>
                <p><strong>CPF: </strong> <?php echo e($client->cpf); ?></p>
                <p><strong>Telefone: </strong> <?php echo e($client->telefone); ?></p>
                <p><strong>Endereço: </strong> <?php echo e($client->endereco); ?></p>
                <p><strong>CEP: </strong> <?php echo e($client->cep); ?></p>
                <br>
            <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>"> Voltar para a Lista </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clients/show.blade.php ENDPATH**/ ?>