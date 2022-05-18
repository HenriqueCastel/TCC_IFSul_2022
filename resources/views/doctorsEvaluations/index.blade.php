@extends('app')

@section('titulo', 'Avaliações dos Médicos')

@section('conteudo')
    <br>
    <h1>Avaliações dos Médicos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Médico</th>
                <th scope="col">Nota</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctorsEvaluations as $doctorsEvaluation)
                <tr>
                    <td scope="row">{{ $doctorsEvaluation->patient->nome }}</a></td>
                    <td>{{ $doctorsEvaluation->doctor->nome }}</td>
                    <td>{{ $doctorsEvaluation->nota }}</td>
                    <td>{{ $doctorsEvaluation->comentario }}</td>
                    <td>
                        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctorsEvaluations.edit', $doctorsEvaluation) }}">Editar</a>
                        <form action="{{ route('doctorsEvaluations.destroy', $doctorsEvaluation) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctorsEvaluations.create') }}">Fazer Avaliação</a>
@endsection