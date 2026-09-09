@extends('master')


@section('content')
    
    @include('partials.header')

    <div id="search-container">

        <form action="{{ route('home') }}" method="get">

        
            <input type="text" name="search" placeholder="Busque pelo título do livro">


            <button type="submit"><i class="bi bi-search"></i></button>

        </form>

    </div>

    <div id="books-container">

       <!-- 
        <div class="book">
 
            <h1>Titulo do Livro</h1>
 
            <p class="autor">Escrito por: nome do autor</p>
 
            <p class="genero">Gênero: gênero do livro</p>
 
            <a class="compra-btn">XX Comprar</a>
 
        </div>
       -->

        @forelse($books as $book)

            <div class="book">

                <h1>{{$book->titulo}}</h1>

                <p class="autor">Escrito por: {{$book->autor}}</p>

                <p class="genero">Gênero: {{$book->genero}}</p>

                <a class="compra-btn" href="https://www.amazon.com.br/s?k={{$book->titulo}}" target="_blank">{{$book->preco}} Comprar</a>

            </div>

            @empty
                <div id="no-book">
                    <h1>Nenhum livro encontrado</h1>
                </div>
            @endforelse
        </div>



    <div id="pagination">
        {{$books->appends(['search' => request()->query('search') ])->links()}}
    </div>

@endsection