<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabFormulario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descricao',
        'tipo',
        'itemformulario',
    ];
    public function getFillable()
    {
        return $this->fillable;
    }

    public function itemformulario()
    {
        return $this->hasMany(ItemFormulario::class)->orderBy('idopcao');
    }

}
