

<?php $__env->startSection('titulo', 'Novo Usuário'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Novo Usuário</h1>
    <form action="<?php echo e(route('clients.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email:" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha:" required>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo:" required>
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="text" class="form-control" id="idade" name="idade" placeholder="Digite a idade:" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF:" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label"><Table>Telefone</Table></label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone:" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereco:" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP:" required>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clients/create.blade.php ENDPATH**/ ?>