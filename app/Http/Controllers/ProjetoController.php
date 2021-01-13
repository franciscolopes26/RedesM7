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
            // 'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
        ]);

        if ($request->hasfile('imageFile')) {


            $i = 1;
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);


                $designacao =  preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $projeto->designacao);
                $designacao = str_replace(' ', '', $designacao);
                $name = $designacao . $i . "." . $extension;

                $file->storeAs('public/uploads/', $name);
                $imgData[] = $name;
                $i++;
            }

            $fileModal = new Foto();
            $fileModal->designacao = json_encode($imgData);
            $fileModal->projeto_id = $projeto->id;

            $fileModal->save();
        }
        return redirect('/projetos')->with('message', 'Projeto inserido com sucesso!');
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
        $categorias = Categoria::all();
        $foto = Foto::where('projeto_id', $projeto->id)->first();
        if ($foto) {
            $designacoes = json_decode($foto->designacao);
        } else {
            $designacoes = [];
        }
        return view('projetos.edit', compact('categorias', 'projeto', 'foto', 'designacoes'));
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
        request()->validate([
            'inputDesig' => 'required',
            'selectCat' => 'required',
            'inputResp' => 'required',
            'inputData' => 'required',
            'inputGit' => 'required',
            'textDesc' => 'required'

        ]);


        $projeto->designacao = request('inputDesig');
        $projeto->categoria_id = request('selectCat');
        $projeto->responsavel = request('inputResp');
        $projeto->dataInicio = request('inputData');
        $projeto->github = request('inputGit');
        $projeto->descricao = request('textDesc');
        $projeto->save();

        $request->validate([
            // 'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
        ]);

        if ($request->hasfile('imageFile')) {
            $fileModal = Foto::where('projeto_id', $projeto->id)->first();
            $fotos = ($fileModal) ? json_decode($fileModal->designacao) : [];
            $i = count($fotos) + 1;


            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);


                $designacao =  preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $projeto->designacao);
                $designacao = str_replace(' ', '', $designacao);
                $name = $designacao . $i . "." . $extension;

                $file->storeAs('public/uploads/', $name);
                $imgData[] = $name;
                $i++;
            }

            $imgData = array_merge($fotos, $imgData);
            $fileModal->designacao = json_encode($imgData);

            $fileModal->save();
        }
        return redirect('/projetos')->with('message', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        $foto = Foto::where('projeto_id', $projeto->id)->first();
        $foto->delete();
        $projeto->delete();

        return redirect('/projetos')->with('message', 'projeto eliminado com sucesso');
    }
}