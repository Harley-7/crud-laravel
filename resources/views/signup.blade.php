@extends('master')


@section('content')

<div class="create-container">

    <div class="banner">
        
        <div class="layer-banner">
            <h1>Bem-Vindo</h1>
            <p>&nbspTenha acesso a um grande catálogo de livros, repleto de títulos que atendem todos os gostos e interesses. Desde romances emocionantes e histórias de aventura até obras técnicas e científicas, você encontrará exatamente o que procura. Navegue por milhares de exemplares, descubra novos autores e mergulhe no universo da leitura com praticidade e variedade ao seu alcance.</p>
        </div>

    </div>

    <div class="form-container">

        <h1>Crie sua conta</h1>

        <form action="{{ route('signup.create') }}" method="post">

            @csrf()

            <div class="form-control">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Digite seu nome" value="{{ old('name') }}">
                <span class="error">{{ $errors->first('name') }}</span>
            </div>
    
            
            <div class="form-control">
                <label for="lastname">Sobrenome</label>
                <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" value="{{ old('lastname') }}">
                <span class="error">{{ $errors->first('lastname') }}</span>
            </div>
    
            <div class="form-control">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="{{ old('email') }}">
                <span class="error">{{ $errors->first('email') }}</span>
            </div>
    
            <div class="form-control">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Digite a sua senha" >
                <span class="error">{{ $errors->first('password') }}</span>
            </div>
    
            <div class="action">
                <button type="submit">Cadastrar</button>
            </div>

        </form>

        <div class="more-container">
            <p>Já tem uma conta ? <a href="{{route('login')}}">fazer login</a></p>
        </div>

    </div>

</div>

@endsection