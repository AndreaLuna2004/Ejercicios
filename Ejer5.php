<?php
class Armas
{
    public $balas;

    public function __construct($balas = 0)
    {
        $this->balas = $balas;
    }

    public function recargar()
    {
        if($this->balas == 0 )
        {
            $this->balas = 6;
        }
    }
    public function disparar()
    {
        if($this->balas > 0 && $this->balas <= 6)
        {
            $this->balas--;
        }
    }
    public function balasRes()
    {
        return $this->balas;
    }
}

class Rifle extends Armas
{

}

class Pistola extends Armas
{

}
class Francotirador extends Armas
{

}
class Escopeta extends Armas
{

}

$rifle = new Rifle($_POST["rifle"] ?? 0);
$pistola = new Pistola($_POST["pistola"] ?? 0);
$francotirador = new Francotirador($_POST["francotirador"] ?? 0);
$escopeta = new Escopeta($_POST["escopeta"] ?? 0);

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(isset($_POST["recargarRifle"]))
    {
        $rifle->recargar();
    }
    else if(isset($_POST["dispararRifle"]))
    {
        $rifle->disparar();
    }
    else if(isset($_POST["recargarPistola"]))
    {
        $pistola->recargar();
    }
    else if(isset($_POST["dispararPistola"]))
    {
        $pistola->disparar();
    }
    else if(isset($_POST["recargarFrancotirador"]))
    {
        $francotirador->recargar();
    }
    else if(isset($_POST["dispararFrancotirador"]))
    {
        $francotirador->disparar();
    }
    else if(isset($_POST["recargarEscopeta"]))
    {
        $escopeta->recargar();
    }
    else if(isset($_POST["dispararEscopeta"]))
    {
        $escopeta->disparar();
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
    <style>
        body 
        {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        h1 
        {

            text-align: center;
        }
        
        .form-container 
        {
            display: flex;
            justify-content: center;
        }
        
        form 
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
        }
        
        img 
        {
            width: 350px;
            height: 250px;
        }
        
        label 
        {   
            color: white;
            margin-top: 20px;
        }
        
        input 
        {
            margin-top: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
            width: 60px;
            background-color: #f7f7f7;
            border: none;
            border-radius: 5px;
        }
        
        button 
        {
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            color: #fff;
            background-color: #4CAF50;
            margin-bottom: 20px;
            cursor: pointer;
        }
        
        button:hover 
        {
            background-color: #3e8e41;
        }
    </style>
</head>
<body background="img/armas.gif">
    <h1 style="color:white">ARMAS</h1>
    <div class="form-container">
        <form action="Ejer5.php" method="POST">
            <img src="img/rifle.jpg">
            <label for="rifle">Rifle</label>
            <input type="number" name="rifles" id="rifle" value="<?php echo $rifle->balasRes(); ?>" readonly>
            <button type="submit" name="recargarRifle">Recargar</button>
            <button type="submit" name="dispararRifle">Disparar</button>
        </form>

        <form action="Ejer5.php" method="POST">
            <img src="img/pistola.jpg">
            <label for="pistola">Pistola</label>
            <input type="number" name="pistola" id="pistola" value="<?php echo $pistola->balasRes(); ?>" readonly>
            <button type="submit" name="recargarPistola">Recargar</button>
            <button type="submit" name="dispararPistola">Disparar</button>
        </form>
        <form action="Ejer5.php" method="POST">
            <img src="img/francotirador.jpg">
            <label for="francotirdor">Francotirador</label>
            <input type="number" name="francotirador" id="francotirador" value="<?php echo $francotirador->balasRes(); ?>" readonly>
            <button type="submit" name="recargarFrancotirador">Recargar</button>
            <button type="submit" name="dispararFrancotirador">Disparar</button>
        </form>
        <form action="Ejer5.php" method="POST">
            <img src="img/escopeta.jpg">
            <label for="escopeta">Escopeta</label>
            <input type="number" name="escopeta" id="escopeta" value="<?php echo $escopeta->balasRes(); ?>" readonly>
            <button type="submit" name="recargarEscopeta">Recargar</button>
            <button type="submit" name="dispararEscopeta">Disparar</button>
        </form>
    </div>
</body>
</html>