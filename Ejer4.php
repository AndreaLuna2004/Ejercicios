<?php
class Lote
{
    public $num1;
    public $num2;

    public function __construct($num1,$num2)
    {
        $this->num1= $num1;
        $this->num2= $num2;
    }
    public function jugar()
    {
        if($this->num1 == 1)
        {
            if ($this->num2 == 65)
            {
                echo "<h1>FELICIDADES A GANADO $70</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED PERDIO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 4)
        {
            if ($this->num2 == 13)
            {
                echo "<h1>FELICIDADES A GANADO $140</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 2)
        {
            if ($this->num2 == 38)
            {
                echo "<h1>FELICIDADES USTED A GANADO $210</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 4)
        {
            if ($this->num2 == 81)
            {
                echo "<h1>FELICIDADES USTED A GANADO $280</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 7)
        {
            if ($this->num2 == 40)
            {
                echo "<h1>FELICIDADES USTED A GANADO $350</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 8)
        {
            if ($this->num2 == 88)
            {
                echo "<h1>FELICIDADES USTED A GANADO $420</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 7)
        {
            if ($this->num2 == 77)
            {
                echo "<h1>FELICIDADES USTED A GANADO $490</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 8)
        {
            if ($this->num2 == 13)
            {
                echo "<h1>FELICIDADES USTED A GANADO $560</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR VUELVA A INGRESAR UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED A PERDIDO, SUERTE A LA PROXIMA</h1>";
        }
        }
        else if($this->num1 == 5)
        {
            if ($this->num2 == 53)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $630</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->num1 == 10)
        {
            if ($this->num2 == 38)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $700</h1>";
            }
            else if($this->num2 > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
            
        }
        else
        {
            echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO DE ENTRADA VALIDA</h1>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="img/fondo.gif">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center><?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = isset ($_POST["num1"]) ? $_POST["num1"] : "";
        $num2 = isset ($_POST["num2"]) ? $_POST["num2"] : "";
        $juego = new Lote($num1,$num2);
        $juego->jugar();
    }
    ?></center>
    <center><button onclick="location.href='indexeje4.php'">Click aqui para Volver a Jugar</button></center>
</body>
</html>