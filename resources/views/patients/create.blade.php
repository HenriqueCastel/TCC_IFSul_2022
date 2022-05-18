@extends('app')

@section('titulo', 'Cadastrar-se como Paciente')

@section('conteudo')
    <div class="mb-3 text-center">
        <br>
        <h1>Cadastrar-se como Paciente</h1>
    </div>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="col-lg-7 mx-auto mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail:" required>
        </div>
        <div class="col-lg-7 mx-auto mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha:" required>
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
        <div class="col-lg-7 mx-auto mb-3 text-center">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Cadastrar-se</button>
        </div>
    </form>
@endsection