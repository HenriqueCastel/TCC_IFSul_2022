@extends('app')

@section('titulo', 'Avaliações das Clínicas')

@section('conteudo')
    <br>
    <h1>Avaliações das Clínicas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Clínica</th>
                <th scope="col">Nota</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($clinicsEvaluations as $clinicsEvaluation)
                <tr>
                    <td scope="row">{{ $clinicsEvaluation->patient->nome }}</a></td>
                    <td>{{ $clinicsEvaluation->clinic->nome }}</td>
                    <td>{{ $clinicsEvaluation->nota }}</td>
                    <td>{{ $clinicsEvaluation->comentario }}</td>
                    <td>
                        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinicsEvaluations.edit', $clinicsEvaluation) }}">Editar</a>
                        <form action="{{ route('clinicsEvaluations.destroy', $clinicsEvaluation) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinicsEvaluations.create') }}">Fazer Avaliação</a>
@endsection