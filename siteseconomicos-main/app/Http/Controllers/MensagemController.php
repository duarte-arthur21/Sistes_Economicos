<?php

namespace App\Http\Controllers;
use App\Models\Msgs;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $msgs = Msgs::all();

        return view('listMsg', ["msgs" => $msgs]);
    }
   
    public function create()
    {
        return view('createMsg');
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
