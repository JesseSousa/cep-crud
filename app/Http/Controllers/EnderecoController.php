<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecos = Endereco::all();

        return response()->json([
            'status' => true,
            'enderecos' => $enderecos,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $endereco = Endereco::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Endereco criado com sucesso!",
            'endereco' => $endereco,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(Endereco $endereco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endereco $endereco)
    {
        $endereco->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Endereco atualizado com sucesso!',
            'endereco' => $endereco,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endereco $endereco)
    {
        $endereco->delete();

        return response()->json([
            'status' => true,
            'message' => 'Endereco deletado com sucesso!',
        ], 200);
    }
}
