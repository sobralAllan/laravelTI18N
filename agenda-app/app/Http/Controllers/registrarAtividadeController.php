<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrarEvento;

class registrarAtividadeController extends Controller
{
    public function index()
    { 
        $dados = registrarEvento::all();//Coletar todos os dados do banco
        return view('paginas.cadastrar')->With('dados', $dados);
    }//fim do método

    public function store(Request $request){
        $data = $request->input('dataEvento');//Coletando um dado
        $descricao = $request->input('descricao');

        $model = new registrarEvento();
        $model->dataEvento = $data;
        $model->descricao  = $descricao;

        $model->save();//Salvo no BD
        return redirect('/cadastrar');
    }//fim do método store

    public function consultar()
    {
        $ids = registrarEvento::all();

        return view('paginas.consultar', compact('ids'));
    }//fim do método

    public function editar($id)
    {
        $dado = registrarEvento::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do método editar

    public function atualizar(Request $request, $id)
    {
        registrarEvento::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//fim do método atualizar

    public function excluir(Request $request, $id)
    {
        registrarEvento::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }//fim do excluir





}//fim da classe
