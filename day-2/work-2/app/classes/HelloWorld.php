<?php

namespace app\classes;

class HelloWorld
{
    public $massage;

    public function __construct()
    {
        $this->massage = "Hello World";
    }

    public function index()
    {
        echo $this->massage;
    }
}