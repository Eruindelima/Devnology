<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Support\Facades\Http;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $fornecedorBrasil = Http::get('http://616d6bdb6dacbb001794ca17.mockapi.io/devnology/brazilian_provider')->json();
        $fornecedorEuropa = Http::get('http://616d6bdb6dacbb001794ca17.mockapi.io/devnology/european_provider')->json();

        return response()->json([
            'sucesso' => true,
            'brasil' => $fornecedorBrasil,
            'europa' => $fornecedorEuropa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
            'imagem' => 'required',
            'preco' => 'required',
            'material' => 'required',
            'departamento' => 'required',
        ]);

        return Produto::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Produto::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
