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
    public function ordem()
    {   
        $protocolo = substr( base64_encode( random_bytes(4) ), 0, -2);

        return view(view:'ordem', data:['numero_protocolo'=> $protocolo]);
    }
    public function Enviar_Chamado(Request $request )
    {   
        $cad=$this->chamado->create([
        'email' => $request->email,
        'protocolo' => $request->protocolo,
        ]);
        $this->mensagem->create([
            'nprotocolo' => $request->protocolo,
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
        $shownome = $this->chamado->where('protocolo', $request->nprotocolo)->first();
        $showmensagem = $this->mensagem->where('nprotocolo', $request->nprotocolo)->get();
        if ($shownome) {
            return view('mostrarordemm', data:['protocolo'=>$shownome, 'nprotocolo'=>$showmensagem]);
        } else { 
            return view('index');
        }
       
    }

    public function Adicionar_Mensagem(Request $request)
    { 
        $msg = $this->mensagem->create([
            'nprotocolo' => $request->protocolo,
            'mensagem' => $request->mensagem,           
        ]);
        $protocol = $this->chamado->where('protocolo', $msg->nprotocolo)->first();
        if ($msg) {
            return view('mostrarordemm', data:['protocolo'=>$protocol, 'nprotocolo'=>$msg]);
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
