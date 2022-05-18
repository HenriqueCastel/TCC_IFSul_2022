@extends('app')

@section('titulo', 'Detalhes do Médico')

@section('conteudo')
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes de {{ $doctor->nome }}</h5>
            <div class="card-body">
                <p><strong>Nome: </strong> {{ $doctor->nome }}</p>
                <p><strong>Nota: </strong> {{ $doctor->doctorsEvaluations()->avg('nota') }}</p>
                <p><strong>E-mail: </strong> {{ $doctor->email }}</p>
                <p><strong>Telefone: </strong> {{ $doctor->telefone }}</p>
                <p><strong>Especialidade: </strong> {{ $doctor->especialidade }}</p>
                <p><strong>Localização(es): </strong> {{ $doctor->localizacoes }}</p>
                <p><strong>Valor da Consulta: </strong> R$ {{ $doctor->valorDaConsulta }},00</p>
                <p><strong>Convênio(s): </strong> {{ $doctor->convenios }}</p>
                @if (Auth::guard('doctor')->check())
                    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctors.edit', $doctor) }}">Editar</a>
                    <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form> 
                @endif
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctors.index') }}"> Voltar para os Médicos </a>
        </div>
    </div>
        @if (Auth::guard('patient')->check()) 
            <br>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('appointments.create') }}">Agendar Consulta</a>
            <br>
        @endif    
    <br>
    <div class="card">
        <h5 class="card-header">Clínicas onde {{ $doctor->nome }} atende</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr> 
                        <th scope="col">Clínica</th>
                        <th scope="col">Nota</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctor->clinics as $clinic)
                        <tr>
                            <td><a scope="row" href="{{ route('clinics.show', $clinic) }}">{{ $clinic->nome }}</td>
                            <td>{{ $clinic->clinicsEvaluations()->avg('nota') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::guard('doctor')->check())
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctorsClinics.create') }}">Adicionar Clínica</a> 
            @endif
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Avaliações de {{ $doctor->nome }}</h5>
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
                    @foreach ($doctor->doctorsEvaluations as $doctorsEvaluation)
                        <tr>
                            <td scope="row">{{ $doctorsEvaluation->patient->nome }}</td>
                            <td>{{ $doctorsEvaluation->nota }}</td>
                            <td>{{ $doctorsEvaluation->comentario }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::guard('patient')->check())
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('doctorsEvaluations.create') }}">Avaliar Médico</a>
            @endif
        </div>
    </div>
    <br>
@endsection



