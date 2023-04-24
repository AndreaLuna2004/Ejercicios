<?php
class Temperatura
{
    public $temperaturas;

    public function __construct($temperaturas)
    {
        $this->temperaturas = $temperaturas;
    }

    public function evaluarTemperaturas()
    {
        if($this->temperaturas <= 0)
        {
            echo "<font color=\"blue\">Temperatura maxima Fria</font>";
        }
        else if($this->temperaturas <= 30)
        {
            echo "<font color=\"yellow\">Temperatura estable</font>";
        }
        else if($this->temperaturas >= 31)
        {
            echo "<font color=\"red\">Temperatura maxima Caliente</font>";
        }
    }
    
}

$calcTemperatura = new Temperatura(81);
$calcTemperatura->evaluarTemperaturas();
?>