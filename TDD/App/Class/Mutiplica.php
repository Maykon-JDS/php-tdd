<?php
namespace App\Class;

use calculo_interface;

class Mutiplica implements calculo_interface{

    private $numero1, $numero2, $total;

    public function __construct()
    {
    }

    public function pegar_numeros(float $numero1, float $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function multiplicar()
    {
        $this->total = $this->numero1 * $this->numero2;
    }

    public function retornar_resultado(): float
    {
        return $this->total;
    }
}
?>