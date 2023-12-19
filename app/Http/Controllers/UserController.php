<?php

namespace App\Http\Controllers;

use App\Models\ModelOs;
use Illuminate\Http\Request;
use app\Models;
class UserController extends Controller
{

  private $chamado;

   public function __construct()    {
    $this ->chamado = new ModelOs();        

}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view(view:'index');
    }
    public function ordem()
    {   
        $protocolo = substr( base64_encode( random_bytes(4) ), 0, -2);

        return view(view:'ordem', data:['numero_protocolo'=> $protocolo]);
    }
    public function Enviar_Chamado(Request $request )
    {   
        $cad=$this->chamado->create([
        'nome' => $request->nome,
        'email' => $request->email,
        'mensagem' => $request->mensagem,     
        'protocolo' => $request->protocolo,
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
        $show = $this->chamado->where('protocolo', $request->nprotocolo)->first();
   
        if ($show) {
            return view('mostrarordemm', data:['protocolo'=>$show]);
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
