<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sobrenome', 'dataNascimento'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'estudante';

    public function getNome(){
        return $this->attributes['nome'];
    }
}
