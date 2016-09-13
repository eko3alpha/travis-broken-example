<?php

class Calc
{
    protected $result = 0;

    public function __construct($default = 0)
    {
        $this->result = $default;
    }

    public function add($add)
    {
        $this->result += $add;
        return $this;
    }

    public function subtract($subtract)
    {
        return $this->add(-$subtract);
    }

    public function multiply($multiply)
    {
        $this->result *= $multiply;
        return $this;
    }

    public function divide($divide)
    {
        return $this->multiply(1/$divide);
    }

    public function is()
    {
        return $this->result;
    }
}