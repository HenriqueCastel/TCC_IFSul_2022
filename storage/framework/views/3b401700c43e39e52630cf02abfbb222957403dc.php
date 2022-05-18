

<?php $__env->startSection('titulo', 'Cadastrar-se como Clínica'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Cadastrar-se como Clínica</h1>
    </div>
    <form action="<?php echo e(route('clinics.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="cnpj" class="form-label">CNPJ:</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Digite o CNPJ da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="telefone" class="form-label"><Table>Telefone:</Table></label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da clínica:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3 text-center">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Cadastrar-se</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clinics/create.blade.php ENDPATH**/ ?>