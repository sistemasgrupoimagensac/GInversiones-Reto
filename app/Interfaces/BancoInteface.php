<?php

namespace App\Interfaces;

interface BancoInterface
{
    public function obtenerInteres(Dinero $dinero): Dinero;
}