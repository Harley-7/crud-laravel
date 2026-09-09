@extends('master')

@section('content')

<div class="update-container">

    <h1>Tem certeza {{auth()->user()->name}} ?</h1>

    <p id="p-delete">Se você deletar a conta, todos os dados associados serão removidos permanentemente e o acesso será encerrado.</p>

    <form action="{{ route('destroy', auth()->user()->id ) }}" method="post">

        @csrf()
        @method('delete')

        <div class="btn-container">
    
                <a class="back-btn" href="{{ route('home') }}">Voltar</a> 

                <button class="red-btn" type="submit">Deletar</button>
    
        </div>


    </form>


</div>

@endsection