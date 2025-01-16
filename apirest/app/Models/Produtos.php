<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    use HasFactory;
    // Desabilitar o gerenciamento automático de timestamps
    public $timestamps = false;

    // Definir os campos que podem ser preenchidos
    protected $fillable = ['name', 'description'];
}
