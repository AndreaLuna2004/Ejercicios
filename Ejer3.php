<?php
class Imagen
{
    public function imagen()
    {
        echo '<img align="center" src="img/barbie.jpg" width="400" height="300">';
    }
}

$imagen = new Imagen();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center"> Mostrador de Imagen</h1>
    <form action = "Ejer3.php" method="post">
        <input type="number" name="numero" required> <br><br>
        <button type="submit">Enviar Información</button>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    for($i = 1; $i <= $_POST["numero"]; $i++)
    {
        $imagen->imagen();
    }
}

?>
</body>
</html>