<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loja;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Produto $produto)
    {
        $produtos = $this->produto->paginate(10);

        return response()->json($produtos);
    }

    /**
     * Display a listing of the resource group by stores.
     *
     * @return \Illuminate\Http\Response
     */
    public function produtosPorLoja(Loja $loja)
    {
        return response()->json($loja->produtos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cria um produto e retorna o resultado dessa criação junto com o id recebido da base
        return $this->loja->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loja $loja, $id)
    {
        return $loja->produtos->where('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Produto $produto)
    {
        $produto->update($request->all());

        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
