<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mensagem_Os extends Model
{
    protected $table="Mensagem";
    protected $fillable=["chamado_id","mensagem"];
    public function chamado(){
        return $this->hasone(related:"App\Models\Chamado_Os",foreignKey:"id",localKey:'chamado_id');
    }
}
