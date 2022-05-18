@extends('app')

@section('titulo', 'Detalhes da Avaliação')

@section('conteudo')
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Avaliação da Clínica {{ $clinicsEvaluation->clinic->nome }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $clinicsEvaluation->id }}</p>
            <p><strong>Paciente: </strong> {{ $clinicsEvaluation->patient->id }}</p>
            <p><strong>Clínica: </strong> {{ $clinicsEvaluation->clinic->id }}</p>
            <p><strong>Nota: </strong> {{ $clinicsEvaluation->nota }}</p>
            <p><strong>Comentário: </strong> {{ $clinicsEvaluation->comentario }}</p>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinicsEvaluations.index') }}"> Voltar para as Avaliações</a>
        </div>
    </div>
@endsection 