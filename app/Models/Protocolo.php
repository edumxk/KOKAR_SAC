<?php

namespace App\Models;

class Protocolo
{
    private $protocolo;

    public function __construct()
    {
        $this->protocolo = $this->geraProtocolo();
    }

    public function getProtocolo()
    {
        return $this->protocolo;
    }

    private function geraProtocolo()
    {
        $protocolo = date('ymdHm');
        $protocolo .= rand(100, 999);
        return $protocolo;
    }
}
