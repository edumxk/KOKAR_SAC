<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $fillable = [
        'protocolo' => 'required',
        'formulario' => 'required',
    ];
    protected $formularios = 'formulario';

    public function getFormulario($protocolo){
        $query = Formulario::where('protocolo', $protocolo)->get();
        return $query;
    }

    public function dataBr(){
        $data = strtotime($this->created_at);
        $data = date('d/m/Y H:i:s', $data);
        return $data;
    }

    public function getTime(){
        $dataAtual = time(); // Obtém o timestamp da data atual
        $dataCriacao = strtotime($this->created_at); // Obtém o timestamp da data de criação

        $diferencaSegundos = $dataAtual - $dataCriacao;

    // Calcula a diferença em dias, horas, minutos e segundos
        $dias = floor($diferencaSegundos / (60 * 60 * 24));
        $horas = floor(($diferencaSegundos % (60 * 60 * 24)) / (60 * 60));
        $minutos = floor(($diferencaSegundos % (60 * 60)) / 60);
        $segundos = $diferencaSegundos % 60;

    // Formatação dos valores
        $horasFormatado = str_pad($horas, 2, '0', STR_PAD_LEFT);
        $minutosFormatado = str_pad($minutos, 2, '0', STR_PAD_LEFT);
        $segundosFormatado = str_pad($segundos, 2, '0', STR_PAD_LEFT);

    // Formata a saída
        return $dias . " Dia(s), " . $horasFormatado . ":" . $minutosFormatado . ":" . $segundosFormatado;
    }

}
