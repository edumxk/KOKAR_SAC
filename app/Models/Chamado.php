<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chamado extends Model
{
    public static function getChamados()
    {
        return '';
    }

    public static function getChamadosBusca($search){

        $query =DB::connection('oracle')->table(function ($query) {
            $query->select('c.*')
                ->selectRaw('(SELECT numlote FROM paralelo.rati WHERE numrat = c.numrat AND numlote IS NOT NULL AND ROWNUM = 1) AS numlote')
                ->from('paralelo.ratc c')
                ->orderBy('dtencerramento')
                ->orderBy('dtabertura');
        }, 'subquery');

        if ($search) {
            $query->where('problema', 'like', '%' . $search . '%');
            $query->orWhere('numlote', 'like', '%' . $search . '%');
        }
        return $query;
    }

    use HasFactory;
}
