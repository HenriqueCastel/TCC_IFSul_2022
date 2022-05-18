@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <div class="mb-3 text-center">
        <br>
        <h1>Find a Doctor</h1>
        <br>
        <h5>Uma aplicação para auxiliar pacientes, médicos e clínicas.<p></p>
        Escolha o modo para realizar o Login:</h5>
        <br>
    </div>
    <div class="col-lg-7 mx-auto mb-3 text-center">
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('patients.login') }}">Paciente</a>
    </div>
    <div class="col-lg-7 mx-auto mb-3 text-center">
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctors.login') }}">Médico</a>
    </div>
    <div class="col-lg-7 mx-auto mb-3 text-center">
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinics.login') }}">Clínica</a>
    </div>
@endsection