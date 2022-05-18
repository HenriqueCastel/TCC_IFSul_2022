@extends('app')

@section('titulo', 'Detalhes da Avaliação')

@section('conteudo')
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Avaliação {{ $doctorsEvaluation->doctor->id }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $doctorsEvaluation->id }}</p>
            <p><strong>Paciente: </strong> {{ $doctorsEvaluation->patient->id }}</p>
            <p><strong>Médico: </strong> {{ $doctorsEvaluation->doctor->id }}</p>
            <p><strong>Nota: </strong> {{ $doctorsEvaluation->nota }}</p>
            <p><strong>Comentário: </strong> {{ $doctorsEvaluation->comentario }}</p>
            <br>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctorsEvaluations.index') }}"> Voltar para as Avaliações</a>
        </div>
    </div>
@endsection