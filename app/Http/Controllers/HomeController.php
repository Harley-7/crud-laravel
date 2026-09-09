<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index(){

        $search = request()->query('search');

        if($search){
            $books = DB::table('books')->select('titulo', 'autor', 'genero', 'preco')->where('titulo', 'like', "{$search}%")->simplePaginate(10);
        }else{
            $books = DB::table('books')->select('titulo', 'autor', 'genero', 'preco')->simplePaginate(10);
        }


        return view('home', [
            'title'=> 'Home',
            'books' => $books
        ]);
    }
}
