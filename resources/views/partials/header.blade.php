<nav id="navbar">
    <div id="navbar-inner">

        <div id="logo">
            <img src="{{ asset('imagens/livro-logo.png') }}" alt="" id = "logo-img">
            <h1><a href="{{route('home')}}">Livraria</a></h1>
        </div>

        <div id="user-container">

            <div id ="user-action">

                <i class="bi bi-person-circle"></i>
               
                <p>{{ auth()->user()->name }}</p>
                
                <div id="arrow">
                    <i class="bi bi-caret-down-fill"></i>
                </div>

            </div>

            <div id="menu-user" class="hide">
                <a href="{{ route('edit', auth()->user()->id ) }}">Editar dados</a>

                <a href="{{ route('edit.password') }}">Mudar a senha</a>

                <a class="danger" href="{{ route('delete') }}">Deletar a conta</a>

                <a class="danger" href="{{ route('login.destroy') }}">Sair</a>
            </div>

        </div>

    </div>
</nav>