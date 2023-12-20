<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelOs extends Model
{
    protected $table="OrdemS";
    protected $fillable=["protocolo","email","ativo"];
}
class MensagemOs extends Model
{
    protected $table="mensagem";
    protected $fillable=["nprotocolo","mensagem"];
}
