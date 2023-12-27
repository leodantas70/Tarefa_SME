<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado_Os extends Model
{
    protected $table="Chamado";
    protected $fillable=["protocolo","email","ativo"];

    public function mensagens(){
        return $this->hasMany(related:"App\Models\Mensagem_Os",foreignKey:"chamado_id",);
    }
}
