<?php
class Convector
{
    public $gradoC;

    public function __construct($gradoC)
    {
        $this->gradoC = $gradoC;
    }

    public function calcularGrados()
    {
        echo "Usted ingreso:" . $this->gradoC . "°C <br> En grados Farenheit es: " . $this->gradoC * 9/5 + 32 . "°F";
    }
}

$calculo = new Convector(28);
$calculo->calcularGrados();
?>