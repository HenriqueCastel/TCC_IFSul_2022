@extends('app')

@section('titulo', 'Pacientes')

@section('conteudo')
    <br>
    <h1>Pacientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient) 
                <tr>
                    <td><a scope="row" href="{{ route('patients.show', $patient) }}">{{ $patient->nome }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection