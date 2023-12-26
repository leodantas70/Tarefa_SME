<?php

namespace App\Http\Controllers;

use App\Models\ModelOs;
use Illuminate\Http\Request;
use app\Models;
use App\Models\MensagemOs;

class UserController extends Controller
{

  private $chamado;
  private $mensagem;
   public function __construct()    {
    $this ->chamado = new ModelOs();
    $this ->mensagem = new MensagemOs();
}

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
        $cad=$this->chamado->create([
        'email' => $request->email,
        'protocolo' => $request->protocolo,
        ]);
        $id=$this->chamado->where('protocolo', $request->protocolo)->get();
        $idd=$id->first();
        $this->mensagem->create([
        'chamado_id' => $idd->id, 
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
        $shownome = $this->chamado->where('protocolo', $request->nprotocolo)->get();
        if ($shownome) {
            $id= $shownome->first();
            if($id){
            $showmensagem = $this->mensagem->where('chamado_id', $id->id)->get();
            return view('mostrarordemm', data:['Chamados'=>$shownome, 'Mensagens'=> $showmensagem]);
            }
            else{
                return view('index');
            }
        }
        else{
            return view('index');
        }        
       
    }

    public function Adicionar_Mensagem(Request $request)
    { 
        $msg = $this->mensagem->create([
            'chamado_id' => $request->protocolo,
            'mensagem' => $request->mensagem,           
        ]);        
        $shownome = $this->chamado->where('id', $request->protocolo)->get();
        $showmensagem = $this->mensagem->where('chamado_id', $request->protocolo)->get();
        if ($msg) {
            return view('mostrarordemm', data:['Chamados'=>$shownome, 'Mensagens'=> $showmensagem]);
        } else { 
            return view('index');
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
