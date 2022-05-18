

<?php $__env->startSection('titulo', 'Agendar Consulta'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Agendar Consulta</h1>
    <form action="<?php echo e(route('consultas.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor:" required>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="Data:" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora:" required>
        </div>
        <div class="mb-3">
            <label for="duracao" class="form-label">Duração</label>
            <input type="text" class="form-control" id="duracao" name="duracao" placeholder="Duração:" required>
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">Médico</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Médico:" required>
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">Paciente</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Paciente:" required>
        </div>

        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Agendar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/consultas/create.blade.php ENDPATH**/ ?>