<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProductController extends Controller
{
    //retorna lista de produtos cadastrados
    public function index()
    {
       return Produtos::all();
    }

    public function store(Request $request)
    {
        //validando tipo de dado
        $validated = $request->validate([
            'name' =>  'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
      
        //Criar uma nova instância do modelo Produtos
        $products = new Produtos();
      
        // Preencher os campos manualmente
        $products->name = $validated['name'];
        $products->description = $validated['description'];
    
        // Salvar o modelo no banco de dados
        $products->save();
 
        // Retornar uma resposta de sucesso
        return response()->json($products, 201);
    }
}
