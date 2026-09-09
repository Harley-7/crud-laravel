<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function index(){
        return view('signup', [
            'title' => 'Cadastre-se'
        ]);
    }

    public function create(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8' 
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $created = (new User())->create($validated);

        if($created){
            Auth::login($created);
            return redirect()->route('home');
        }

    }


}
