<?php

namespace App\Models;

class Dinero
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function validate() :bool
    {
        return is_numeric($this->value);
    }

    public function value()
    {
        return $this->value;
    }
}