<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'vendedor_id', 
        'produto_id', 
        'comissao', 
        'dataVenda'
    ];
}
