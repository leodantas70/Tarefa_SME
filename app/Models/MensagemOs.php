<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MensagemOs extends Model
{
    protected $table="mensagem";
    protected $fillable=["nprotocolo","mensagem"];
}
