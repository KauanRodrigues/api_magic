<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Filmes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmesController extends Controller
{
    private $filmes;

    function __construct(Filmes $filmes)
    {
        $this->filmes = $filmes;
    }

    /**
     * Exibe todos os registros.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->filmes->get();
        return response()->json(['response' => $response]);
    }

    /**
     * Insere um novo registro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados['filme'] = trim($request->filme);
        $dados['classificacao'] = trim($request->classificacao);
        $dados['atores'] = trim($request->atores);
        $dados['diretor'] = trim($request->diretor);

        DB::beginTransaction();

        try{
            $this->filmes->create($dados);
            DB::commit();
            return response()->json(['response' => true]);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['response' => $e]);
        }
    }

    /**
     * Exibe um registro especifico.
     *
     * @param  int  $i
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = $this->filmes->find($id);

        return response()->json(['response' => $response]);
    }

    /**
     * Atualiza um registro especifico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $dados['filme'] = trim($request->filme);
        $dados['classificacao'] = trim($request->classificacao);
        $dados['atores'] = trim($request->atores);
        $dados['diretor'] = trim($request->diretor);

        DB::beginTransaction();

        try{
            $this->filmes->where([['id', '=', $id]])->update($dados);
            DB::commit();
            return response()->json(['response' => true]);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['response' => $e]);
        }
    }

    /**
     * Remove um registro especifico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try{
            $filme = $this->filmes->find($id);
            $filme->delete();
            DB::commit();
            return response()->json(['response' => true]);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['response' => $e]);
        }
    }
}
