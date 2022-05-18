

<?php $__env->startSection('titulo', 'Detalhes do cliente'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="card">
        <h5 class="card-header">Detalhes do Cliente <?php echo e($client->nome); ?></h5>
            <div class="card-body">
                <p><strong>ID: </strong> <?php echo e($client->id); ?></p>
                <p><strong>Nome: </strong> <?php echo e($client->nome); ?></p>
                <p><strong>Endereço: </strong> <?php echo e($client->endereco); ?></p>
                <p><strong>Observação: </strong> <?php echo e($client->observacao); ?></p>
                <br>
            <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>"> Voltar para lista </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\treinaweb\tw-projeto\resources\views/clients/show.blade.php ENDPATH**/ ?>