<?php

class Model
{
    public $string;

    public function __construct()
    {
        $this->string = "Hello World"
    }

    public function get_string()
    {
        return $this->string;
    }
}