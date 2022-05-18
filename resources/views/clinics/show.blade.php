@extends('app')

@section('titulo', 'Detalhes da Clínica')

@section('conteudo')
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes de {{ $clinic->nome }}</h5>
        <div class="card-body">
            <p><strong>Nome: </strong> {{ $clinic->nome }}</p>
            <p><strong>Nota: </strong> {{ $clinic->clinicsEvaluations()->avg('nota') }}</p>
            <p><strong>Descrição: </strong> {{ $clinic->descricao }}</p>
            <p><strong>E-mail: </strong> {{ $clinic->email }}</p>
            <p><strong>Telefone: </strong> {{ $clinic->telefone }}</p>
            <p><strong>Endereço: </strong> {{ $clinic->endereco }}</p>
            @if (Auth::guard('clinic')->check())
                    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinics.edit', $clinic) }}">Editar</a>
                    <form action="{{ route('clinics.destroy', $clinic) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form> 
                @endif
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinics.index') }}"> Voltar para as Clínicas </a>
        </div>
    </div>
    <br>  
    <div class="card">
        <h5 class="card-header">Médicos de {{ $clinic->nome }}</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr> 
                        <th scope="col">Médico</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Nota</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clinic->doctors as $doctor)
                        <tr>
                            <td><a scope="row" href="{{ route('doctors.show', $doctor) }}">{{ $doctor->nome }}</td>
                            <td>{{ $doctor->especialidade }}</td>
                            <td>{{ $doctor->doctorsEvaluations()->avg('nota') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::guard('clinic')->check())
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctorsClinics.create') }}">Adicionar Médico</a> 
            @endif
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Avaliações de {{ $clinic->nome }}</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Paciente</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Comentário</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clinic->clinicsEvaluations as $clinicsEvaluation)
                        <tr>
                            <td scope="row">{{ $clinicsEvaluation->patient->nome }}</td>
                            <td>{{ $clinicsEvaluation->nota }}</td>
                            <td>{{ $clinicsEvaluation->comentario }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::guard('patient')->check())
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('clinicsEvaluations.create') }}">Avaliar Clínica</a>
            @endif
        </div>
    </div>
    <br>
@endsection



