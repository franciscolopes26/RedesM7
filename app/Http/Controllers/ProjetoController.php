<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Models\Categoria;
use App\Models\Foto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::all();
        return view('projetos.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('projetos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'inputDesig' => 'required',
            'selectCat' => 'required',
            'inputResp' => 'required',
            'inputData' => 'required',
            'inputGit' => 'required',
            'textDesc' => 'required'

        ]);

        $projeto = new Projeto();
        $projeto->designacao = request('inputDesig');
        $projeto->categoria_id = request('selectCat');
        $projeto->responsavel = request('inputResp');
        $projeto->dataInicio = request('inputData');
        $projeto->github = request('inputGit');
        $projeto->descricao = request('textDesc');

        $projeto->save();


        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
        ]);

        if ($request->hasfile('imageFile')) {
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
            }

            $fileModal = new Foto();
            $fileModal->designacao = json_encode($imgData);
            $fileModal->projeto_id = $projeto->id;

            $fileModal->save();
        }
        return redirect('/projetos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        //
    }
}