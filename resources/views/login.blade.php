@extends('master')

@section('content')
    <div class="create-container">

        <div class="banner">

            <div class="layer-banner">

                <h1>Bem-Vindo de Volta</h1>
                <p>&nbspTenha acesso a um grande catálogo de livros, repleto de títulos que atendem todos os gostos e interesses. Desde romances emocionantes e histórias de aventura até obras técnicas e científicas, você encontrará exatamente o que procura. Navegue por milhares de exemplares, descubra novos autores e mergulhe no universo da leitura com praticidade e variedade ao seu alcance.</p>

            </div>

        </div>

        <div class="form-container">

            <h1>Login</h1>

            <form action="{{ route('login.store') }}" method="post">

                @csrf()

                <div class="form-control">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="{{ old('email') }}">
                    <p class="error">{{ $errors->first('email') }}</p>
                </div>

                <div class="form-control">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha">
                    <p class="error">{{ $errors->first('password') }}</p>
                </div>

                <div id="remember">
                    <input type="checkbox" checked  name="remember">Lembrar
                </div>

                <div class="action">
                    <button type="submit">Login</button>
                </div>

            </form>

            <div class="more-container">
                <p>Não tem uma conta ? <a href="{{route('signup')}}">Cadastre-se</a></p>
            </div>

        </div>

</div>

@endsection