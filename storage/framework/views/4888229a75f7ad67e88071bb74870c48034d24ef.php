

<?php $__env->startSection('titulo', 'Consultas'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Consultas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Clínica</th>
                <th scope="col">Médico</th>
                <th scope="col">Paciente</th>
                <th scope="col">Ações</th> 
            </tr>
        </thead>
        <tbody> 
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($appointment->data); ?></td>
                    <td><a href="<?php echo e(route('appointments.show', $appointment)); ?>"><?php echo e($appointment->hora); ?></td>
                    <td><?php echo e($appointment->clinic->nome); ?></td>
                    <td><?php echo e($appointment->doctor->nome); ?></td>
                    <td><?php echo e($appointment->patient->nome); ?></td>
                    <td>
                        <form action="<?php echo e(route('appointments.destroy', $appointment)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja cancelar?')">Cancelar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('appointments.create')); ?>">Agendar Consulta</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc2\resources\views/appointments/index.blade.php ENDPATH**/ ?>