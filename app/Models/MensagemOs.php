<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MensagemOs extends Model
{
    protected $table="Mensagem";
    protected $fillable=["chamado_id","mensagem"];
    public function RelChamado(){
        return $this->hasone(related:"App\Models\ModelOs",foreignKey:"id",localKey:'chamado_id');
    }
}
