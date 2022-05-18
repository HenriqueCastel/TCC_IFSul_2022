

<?php $__env->startSection('titulo', 'Avaliação do Médico'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Fazer Avaliação do Médico</h1>
    <form action="<?php echo e(route('doctorEvaluations.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nota" class="form-label">Nota</label>
            <input type="text" class="form-control" id="nota" name="nota" placeholder="Dê uma nota:" required>
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentário</label>
            <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Deixe um comentário: (opcional)" required>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/doctorEvaluations/create.blade.php ENDPATH**/ ?>