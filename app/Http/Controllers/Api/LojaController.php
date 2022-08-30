<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    private $loja;

    public function __construct(Loja $loja)
    {
        $this->loja = $loja;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lojas = $this->loja->paginate(10);

        return response()->json($lojas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cria uma loja e retorna o resultado dessa criação junto com o id recebido da base
        return $this->loja->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function show(Loja $loja)
    {
        return $loja;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loja $loja)
    {
        $loja->update($request->all()); // retorna true or false, não retorna objeto

        return $loja;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loja $loja)
    {
        return $loja->delete();
    }
}
