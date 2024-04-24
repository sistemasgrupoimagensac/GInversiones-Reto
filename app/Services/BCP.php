<?php

namespace App\Services;

use App\Models\Dinero;

class BCP implements BancoInterface
{
    const INTERES = 0.02;

    public function obtenerInteres(Dinero $dinero): Dinero
    {
        if () {
            throw new Exception("No es un numero valido");
        }

        return;
    }
}