

<?php $__env->startSection('titulo', 'Editar Cliente'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Editar Cliente</h1>

    <form action="<?php echo e(route('clients.update', $client)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="<?php echo e($client->nome); ?>" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" value="<?php echo e($client->endereco); ?>" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a Observação" required><?php echo e($client->observacao); ?></textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\treinaweb\tw-projeto\resources\views/clients/edit.blade.php ENDPATH**/ ?>