@extends('app')

@section('titulo', 'Consultas')

@section('conteudo')
    <br>
    <h1>Consultas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Hora</th> 
                <th scope="col">Clínica</th>
                <th scope="col">Médico</th>
                <th scope="col">Paciente</th>
                <th scope="col">Ações</th> 
            </tr>
        </thead>
        <tbody>  
            @foreach ($appointments as $appointment)
                <tr>
                    <td scope="row">{{ $appointment->data }}</td>
                    <td><a href="{{ route('appointments.show', $appointment) }}">{{ $appointment->hora }}</td>
                    <td>{{ $appointment->clinic->nome }}</td>
                    <td>{{ $appointment->doctor->nome }}</td>
                    <td>{{ $appointment->patient->nome }}</td>
                    <td>
                        <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja cancelar?')">Cancelar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (Auth::guard('patient')->check())
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('appointments.create') }}">Agendar Consulta</a>
    @endif
@endsection