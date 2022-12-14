<?php

namespace MuhammadFikri\Belajar;

class Customer {

  private string $name;

  public function __construct(string $name){
    $this->name = $name;
  }

  public function sayHello(string $name = "guest"): string
  {
    return "Hello $name, My name is $this->name";
  }

}