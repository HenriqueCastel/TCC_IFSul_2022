@extends('app')

@section('titulo', 'Esqueci a Senha')

@section('conteudo')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto mb-3">
            <div class="card">
                <div class="card-header">{{ __('Esqueci a Senha') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('patients.password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-lg-9 mx-auto mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-7 mx-auto mb-3">
                                <button type="submit" class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;">
                                    {{ __('Enviar link para trocar a senha') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
