<?php

namespace App\Http\Controllers;

use App\Registros1;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registros1::paginate(5);
        return view('principal',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'senha' => 'required'
        ]);
    $registros = new Registros1;
    $registros-> nome = $request ->nome;
    $registros-> email = $request ->email;
    $registros-> numero = $request ->telefone;
    $registros-> senha = $request ->senha;
    $registros-> save();
    return redirect(route('home'))->with('sucessoMsg','Registrado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registros = Registros1::find($id);
        return view('edit',compact('registros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'senha' => 'required'
        ]);
    $registros = Registros1::find($id);
    $registros-> nome = $request ->nome;
    $registros-> email = $request ->email;
    $registros-> numero = $request ->telefone;
    $registros-> senha = $request ->senha;
    $registros-> save();
    return redirect(route('home'))->with('sucessoMsg','Atualizado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Registros1::find($id)->delete();
        return redirect(route('home'))->with('sucessoMsg','Deletado com Sucesso');
    }
}
