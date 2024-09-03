<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sair()
    {
        // return response()->json(['status' => false , "mensagem" => "saiu"]);
        return view('welcome')->with('info', 'Voce saiu.');
    }

    public function store(Request $request)
    {
        unset($request['_token']);
        
        // Pegar os dados do request
        $data = $request->all();
        
        // Desativar a verificação SSL temporariamente
        $response = Http::withOptions(['verify' => false])->post('https://jb.zoogame.online/v1/usuarios/login', $data);
    
        // Verificar se a resposta é bem-sucedida
        if (!$response->successful()) {
            return redirect()->back()->with('danger', 'Usuario e senha não confere.');
        }
    
        // Obter o corpo da resposta
        $responseBody = $response->json();
    
        // Verificar se o erro é de usuário não cadastrado
        if (isset($responseBody['erro']) && $responseBody['erro'] === 'Usuário não cadastrado') {
            return redirect()->back()->with('danger', 'Usuário não cadastrado.');
        }
    
        // Sucesso no login, redirecionar ou retornar a view com a resposta
        return view('inc.home', compact('responseBody'));
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
