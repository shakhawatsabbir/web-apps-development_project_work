<?php

namespace App\classes;

class HelloWorld
{
    public $massage;

    public function __construct()
    {
        $this->massage = "My name is Md Shakhawat Hossain";
    }

    public function index()
    {
        echo $this->massage;
    }
}