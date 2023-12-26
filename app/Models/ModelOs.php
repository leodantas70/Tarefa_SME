<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelOs extends Model
{
    protected $table="Chamado";
    protected $fillable=["protocolo","email","ativo"];

    public function RelMensagem(){
        return $this->hasMany(related:"App\Models\MensagemOs",foreignKey:"chamado_id",);
    }
}
