

<?php $__env->startSection('titulo', 'Cadastrar-se como Médico'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Cadastrar-se como Médico</h1> 
    </div>
    <form action="<?php echo e(route('doctors.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <!-- <div class="col-lg-7 mx-auto mb-3">
            <label for="image">Foto de Perfil:</label> 
            <input type="file" class="form-control" id="image" name="image" class="form-control-file" required>
        </div> -->
        <div class="col-lg-7 mx-auto mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="dataDeNascimento" class="form-label">Data de Nascimento:</label>
            <input type="text" class="form-control" id="dataDeNascimento" name="dataDeNascimento" placeholder="Digite sua data de nascimento:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="rg" class="form-label">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite seu RG:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="telefone" class="form-label"><Table>Telefone:</Table></label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="especialidade" class="form-label">Especialidade:</label>
            <input type="text" class="form-control" id="especialidade" name="especialidade" placeholder="Digite a(s) sua(s) especialidade(s):" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="localizacoes" class="form-label">Localização(es):</label>
            <input type="text" class="form-control" id="localizacoes" name="localizacoes" placeholder="Digite a(s) cidade(s) onde você atende:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="valorDaConsulta" class="form-label">Valor da Consulta:</label>
            <input type="text" class="form-control" id="valorDaConsulta" name="valorDaConsulta" placeholder="Digite o valor da sua consulta: (apenas o número sem vírgula: 200)" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="convenios" class="form-label">Convênio(s):</label>
            <input type="text" class="form-control" id="convenios" name="convenios" placeholder="Digite o(s) convênio(s) que você atende:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3 text-center">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Cadastrar-se</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc2\resources\views/doctors/create.blade.php ENDPATH**/ ?>