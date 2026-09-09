<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function edit(User $user){
        return view('edit', [
            'title' => 'Editar dados',
            'user' => $user
        ]);
    }

    public function edit_password(){
        return view('edit_password', [
            'title' => 'Editar a senha'
        ]);
    }

    public function update(Request $request , User $user){
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id
        ]);

        $updated = $user->update($validated);

        if($updated){
            Session::flash('success', 'Seus dados foram editados com sucesso');
        }else{
            Session::flash('error', 'Erro ao tentar editar seus dados');
        }

        return back();

    }

    public function password_update(Request $request, User $user){

        $validated = $request->validate([
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ]);

        $user->password = bcrypt($validated['password']);
        $updated = $user->save();

        if($updated){
            Session::flash('password_success', 'Sua senha foi atualizada com sucesso');
        }else{
            Session::flash('password_error', 'Erro ao tentar atualizar a sua senha');
        }

        return back();

    }

    public function delete(){
        return view('delete', [
            'title' => 'Deletar a conta'
        ]);
    }

    public function destroy(User $user){
        $user->delete();

        return redirect('signup');
    }

}
