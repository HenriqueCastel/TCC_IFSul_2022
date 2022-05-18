@extends('app')

@section('titulo', 'Detalhes do Paciente')

@section('conteudo')
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes de {{ $patient->nome }}</h5>
            <div class="card-body">
                <p><strong>Nome: </strong> {{ $patient->nome }}</p>
                <p><strong>E-mail: </strong> {{ $patient->email }}</p>
                <p><strong>Telefone: </strong> {{ $patient->telefone }}</p>
                @if (Auth::guard('patient')->check())
                    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('patients.edit', $patient) }}">Editar</a>
                    <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form> 
                @endif
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('patients.index') }}"> Voltar</a>
            </div>
    </div>
    <br>
@endsection



