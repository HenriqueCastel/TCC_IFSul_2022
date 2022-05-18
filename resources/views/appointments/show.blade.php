@extends('app')

@section('titulo', 'Detalhes da Consulta')

@section('conteudo')
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Consulta</h5>
        <div class="card-body">
            <p><strong>Data: </strong>{{ $appointment->data }}</p>
            <p><strong>Hora: </strong>{{ $appointment->hora }}</p>
            <p><strong>Endereço: </strong>{{ $appointment->clinic->endereco }}</p>
            <p><strong>Valor da Consulta: </strong>R$ {{ $appointment->doctor->valorDaConsulta }},00</p>
            <p><strong>Convênio: </strong>{{ $appointment->doctor->convenios }}</p>
            <p><strong>Clínica: </strong>{{ $appointment->clinic->nome }}</p>
            <p><strong>Médico: </strong>{{ $appointment->doctor->nome }}</p>
            <p><strong>Paciente: </strong>{{ $appointment->patient->nome }}</p>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="{{ route('appointments.index') }}"> Voltar</a>
        </div> 
    </div>
@endsection  