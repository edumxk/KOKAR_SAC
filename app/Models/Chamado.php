<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chamado extends Model
{
    public static function getChamado($numrat)
    {
        $query = DB::connection('oracle')->table('paralelo.ratc as c')
            ->select(DB::raw('UPPER(l.parecer) AS parecer2'),
                DB::raw('UPPER(c.problema) AS problema2'),
                'c.*', 'i.*', 'l.*', 'p.descricao as produto', 'g.categoria' , 'cli.cliente as nomecliente')
            ->leftJoin('paralelo.rati as i', 'i.numrat', '=', 'c.numrat')
            ->leftJoin('paralelo.ratalab as l', function ($join) use ($numrat) {
                $join->on('l.numrat', '=', 'c.numrat')
                    ->where('l.id', DB::raw("(select max(id) from paralelo.ratalab where numrat = $numrat)"));
            })
            ->leftJoin('kokar.pcprodut as p', 'p.codprod', '=', 'i.codprod')
            ->leftJoin('kokar.pccategoria as g', function ($join) {
                $join->on('g.codcategoria', '=', 'p.codcategoria')
                    ->on('g.codsec', '=', 'p.codsec');})
            ->Join('kokar.pcclient as cli', 'cli.codcli', '=', 'c.codcli')
            ->where('c.numrat', $numrat)
            ->get();

        return $query;
    }

    public static function getChamadosBusca($search){

        $query =DB::connection('oracle')->table(function ($query) {
            $query->select(['c.*', 'cli.cliente', 'u.nome'])
                ->selectRaw('(SELECT numlote FROM paralelo.rati WHERE numrat = c.numrat AND numlote IS NOT NULL AND ROWNUM = 1) AS numlote')
                ->from('paralelo.ratc c')
                ->Join('kokar.pcclient as cli', 'cli.codcli', '=', 'c.codcli')
                ->Join('kokar.pcusuari as u', 'u.codusur', '=', 'cli.codusur1')
                ->orderBy('dtencerramento')
                ->orderBy('dtabertura');
        }, 'subquery');

        //join ->join('kokar.pcprodut p', 'i.codprod', '=', 'p.codprod')



        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('problema', 'like', '%' . $search . '%')
                    ->orWhere('numlote', 'like', '%' . $search . '%')
                    ->orWhere('cliente', 'like', '%' . $search . '%')
                    ->orWhere('nome', 'like', '%' . $search . '%')
                    ->orWhere('numrat', 'like',  $search )
                    ->orderBy('dtencerramento', 'desc');

            });
        }
        return $query->orderBy('dtencerramento', 'desc');
    }

    use HasFactory;
}
