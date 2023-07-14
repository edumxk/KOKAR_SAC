<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFormulario extends Model
{
    protected $fillable = [
        'idopcao',
        'descricaoitem',
        'idformulario',
    ];
    public function getFillable()
    {
        return $this->fillable;
    }
    public function CabFormulario()
    {
        return $this->belongsTo(CabFormulario::class)->orderBy('id');
    }

    use HasFactory;
}
