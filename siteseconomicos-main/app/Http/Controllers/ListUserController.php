<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('listUsers', ["users" => $users]);
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
        
        $data_form = $request->all();
        $data_form['status'] = (!isset($data_form['status']))? 0 : 1;

        $users = User::find($request->id);
        $users->status = $data_form['status'];
        $users->save();
        return back()->with("sucess", "Usuario atualizado com sucesso");
    }

  
    public function destroy(request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return back()->with("sucess", "Usuario removido com sucesso");
    }
}
