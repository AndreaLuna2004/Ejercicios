<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        h1 {
            margin-top: 0;
        }
    </style>
</head>
<body background="img/corazones.gif">
    <h1 align="center" bgcolor="red">LOTE</h1>
    <table align="center">
        <tr>
            <td>
                <h1>Costos de Entrada y Premios</h1>
                <table align="center">
                    <tr>
                        <th>Entrada</th>
                        <th>Premio</th>
                    </tr>
                    <tr>
                        <td>$1</td>
                        <td>$70</td>
                    </tr>
                    <tr>
                        <td>$2</td>
                        <td>$140</td>
                    </tr>
                    <tr>
                        <td>$3</td>
                        <td>$210</td>
                    </tr>
                    <tr>
                        <td>$4</td>
                        <td>$280</td>
                    </tr>
                    <tr>
                        <td>$5</td>
                        <td>$350</td>
                    </tr>
                    <tr>
                        <td>$6</td>
                        <td>$420</td>
                    </tr>
                    <tr>
                        <td>$7</td>
                        <td>$490</td>
                    </tr>
                    <tr>
                        <td>$8</td>
                        <td>$560</td>
                    </tr>
                    <tr>
                        <td>$9</td>
                        <td>$630</td>
                    </tr>
                    <tr>
                        <td>$10</td>
                        <td>$700</td>
                    </tr>
                </table>
            </td>   
        </tr>
    </table>
    <h1 align="center">Ingrese la cantidad con la que desee Jugar</h1>
    <form action = "Ejer4.php" method="post">
        <center><h3>Ingresar que entrada desee comprar</h3></center>
        <center><input align="center" type="number" name="numero1" required></center>
        <center><h3>Ingresar el número que desee jugar del 1 al 100</h3></center>
        <center><input align="center" type="number" name="numero2" required></center>
        <center><button type="submit" >Jugar</button></center>
    </form>
</body>
</html>