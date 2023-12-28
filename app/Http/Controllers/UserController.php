<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models;
use App\Models\Mensagem_Os;
use App\Models\Chamado_Os;
class UserController extends Controller
{

    public function index()
    {
       return view(view:'index');
    }
    public function login()
    {
       return view(view:'login');
    }
    public function chamado()
    {   
        $protocolo = substr( base64_encode( random_bytes(4) ), 0, -2);

        return view(view:'chamado', data:['numero_protocolo'=> $protocolo]);
    }
    public function Enviar_Chamado(Request $request )
    {   
        $cad=Chamado_Os::create([
        'email' => $request->email,
        'protocolo' => $request->protocolo,
        ]);
        $id=Chamado_Os::where('protocolo', $request->protocolo)->first();
        Mensagem_Os::create([
        'chamado_id' => $id->id, 
        'mensagem' => $request->mensagem,   
            ]);
        if($cad){
            return view(view:'sucesso', data:['protocolo'=>$request->protocolo]);      
                }  
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    { 
        return view('mostrarordem');
    }
    public function show_protocolo(Request $request)
    { 
        $chamado = Chamado_Os::where('protocolo', $request->nprotocolo)->first();
        if ($chamado) {
            $msg = $chamado->mensagens;
            return view('mostrarordemm', data:['Chamado'=>$chamado, 'Mensagens'=> $msg]);
        }
        return view('index');
                
       
    }

    public function Adicionar_Mensagem(Request $request)
    { 
        $msg = new Mensagem_Os([
            'chamado_id' => $request->protocolo,
            'mensagem' => $request->mensagem,           
        ]);        
        $protocolo = Chamado_Os::find($request->protocolo);
        $protocolo->mensagens()->save($msg);
        // TODO save msg on protocolo
        return view('index');

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
