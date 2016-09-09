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
        $this->result = $this->result + $add;
        return $this;
    }

    public function subtract($subtract)
    {
        $this->result = $this->result - $subtract;
        return $this;
    }

    public function is()
    {
        return $this->result;
    }

}