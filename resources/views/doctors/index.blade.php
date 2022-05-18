@extends('app')

@section('titulo', 'Médicos')

@section('conteudo')
    <br>
    <form method="GET" action="{{ url('/doctors') }}" accept-charset="UTF-8" class="col-lg-6 mx-auto mb-3" role="search">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Pesquisar" value="{{ request('search') }}">
            <span class="input-group-append">
                <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </span>
         </div>
    </form>
    <h1>Médicos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Nota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td><a scope="row" href="{{ route('doctors.show', $doctor) }}">{{ $doctor->nome }}</a></td>
                    <td>{{ $doctor->especialidade }}</td>
                    <td>{{ $doctor->doctorsEvaluations()->avg('nota') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection