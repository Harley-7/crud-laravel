@extends('master')

@section('content')

<div class="update-container">

    <h1>Edite a sua senha</h1>

    @if(Session::has('password_success'))
       <span class="success-container">{{Session::get('password_success')}}</span>
    @elseif(Session::has('password_error')){
        <span class="error-container">{{Session::get('password_error')}}</span>
    }
    @endif

    <form action="{{ route('password.update', auth()->user()->id ) }}" method="post">

        @csrf()
        @method('put')

        <div class="form-control">
            <label for="">Senha</label>
            <input type="password" name="password" placeholder="Digite a sua nova senha" >
            <span class="error">{{ $errors->first('password') }}</span>
        </div>

        <div class="form-control">
            <label for="">Confirme a senha</label>
            <input type="password" name="password_confirmation" placeholder="Confirme a sua nova senha">
            <span class="error">{{ $errors->first('password_confirmation') }}</span>
        </div>

        <div class="btn-container">

            <a class="back-btn" href="{{ route('home') }}">Voltar</a>

            <div class="action">
                <button type="submit">Editar</button>
            </div>

        </div>

    </form>

</div>

@endsection