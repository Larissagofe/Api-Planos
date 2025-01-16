<?php

namespace App\Http\Controllers;

use App\Models\Planos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanosController extends Controller
{
    //listar planos
    public function index()
    {
        return Planos::all();
    }

    //função para criar novo plano
    public function create(Request $request)
    {   
        //validando tipo de dado
        $validated = $request->validate([
            'name' =>  'required|string|max:255',
            'description' => 'required|string|max:255',
            'products' => 'required|string'
        ]);

        //Criar uma nova instância do modelo Planos
        $plano = new Planos();
      
        // Preencher os campos manualmente
        $plano->name = $validated['name'];
        $plano->description = $validated['description'];
        $plano->products = $validated['products'];
    
        // Salvar o modelo no banco de dados
        $plano->save();
        
        // Retornar uma resposta de sucesso
        return response()->json($plano, 201); 
    }

    public function update(Request $request, string $id)
    {
        $planos = Planos::FindOrFail($id);
        $validated = $request->validate([
            'products' => 'required|string'
        ]);

        $planos->update($validated);
        return $planos;
    }
}
