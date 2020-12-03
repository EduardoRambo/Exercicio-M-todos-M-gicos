<?php

namespace App\Model;

class Calculadora
{

  private $numero1;
  private $numero2;
  private $numero3;

  public function __get($atribute)
  {
    return $this->$atribute;
  }

  public function __set($atribute, $value)
  {
    $this->$atribute = $value;
  }

  public function Calcular()
  {
    return $this->numero1 + $this->numero2 + $this->numero3;
  }

  public function __toString() : string
  {
    return nl2br("
      numero 1:  $this->numero1
      numero 2:  $this->numero2
      numero 3:  $this->numero3
      valor da soma: ".$this->Calcular()
    );
  }
}



 ?>
