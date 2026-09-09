@extends('master')

@section('content')

<div class="update-container">
    
    <h1>Edite seus dados</h1>

    @if(Session::has('success'))
       <span class="success-container">{{Session::get('success')}}</span>
    @elseif(Session::has('error')){
        <span class="error-container">{{Session::get('error')}}</span>
    }
    @endif


    <form action="{{ route('update', $user->id) }}" method="post">
        
        @csrf()
        @method('put')

        <div class="form-control">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" value="{{ $user->name }}">
            <span class="error">{{ $errors->first('name') }}</span>
        </div>

        
        <div class="form-control">
            <label for="lastname">Sobrenome</label>
            <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" value="{{ $user->lastname }}">
            <span class="error">{{ $errors->first('lastname') }}</span>
        </div>

        <div class="form-control">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="{{ $user->email }}">
            <span class="error">{{ $errors->first('email') }}</span>
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