

<?php $__env->startSection('titulo', 'Lista de clientes'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Lista de Clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($client->id); ?></th>
                    <td><a href="<?php echo e(route('clients.show', $client)); ?>"><?php echo e($client->nome); ?></a></td>
                    <td><?php echo e($client->endereco); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('clients.edit', $client)); ?>">Atualizar</a>
                        <form action="<?php echo e(route('clients.destroy', $client)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <a class="btn btn-success" href="<?php echo e(route('clients.create')); ?>">Novo Cliente</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\treinaweb\tw-projeto\resources\views/clients/index.blade.php ENDPATH**/ ?>