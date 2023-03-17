<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Produto;
use Exception;
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
        
    }
    /**
     * Display the specified resource.
     */

    public function show(string $fornecedor, int $id)
    {

        try {
            switch ($fornecedor) {

            case 'brasil':
                $provider = 'brazilian_provider';
                break;
            case 'europa':
                $provider = 'european_provider';
                break;

            default:
                throw new Exception('Fornecedor não encontrado');
                break;
        
            }
        

            $produto = Http::get('http://616d6bdb6dacbb001794ca17.mockapi.io/devnology/'.$provider.'/'.$id)->json();
        
            return response()->json([
                'sucesso' => true,
                'dados' => $produto,
            ]);
        } catch (\Throwable $th) {

            return response()->json([
                'sucesso' => false,
                'mensagem' => $th->getMessage(),
            ]);
        }
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