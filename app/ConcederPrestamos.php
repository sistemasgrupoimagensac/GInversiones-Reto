<?php

namespace App;

use App\Interfaces\BancoInterface;
use App\Models\Dinero;

class ConcederPrestamos
{
    protected $banco;

    public function __construct($banco)
    {
        $this->banco = $banco;
    }

    public function __invoke($monto = '')
    {
        if( empty($name) ) return;

        $monto = new Dinero($monto);

        return $this->banco->obtenerInteres($monto);
    }
}