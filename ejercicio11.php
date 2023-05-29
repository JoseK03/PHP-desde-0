<?php
    if($_POST)
    {

        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        //suma
        $suma = $valorA + $valorB;
        //resta
        $resta = $valorA - $valorB;
        //multiplicacion
        $multiplicacion = $valorA * $valorB;
        //division
        $division = $valorA / $valorB;
     
        echo "<br>" .$suma;
        echo "<br>" .$resta;
        echo "<br>" .$division;
        echo "<br>" .$multiplicacion;
        

        if($valorA == $valorB){
            echo "los numeros son iguales";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        <label for="">Valor A:</label>
        <input type="text" name="valorA">
        <br>
        <label for="">Valor B:</label>
        <input type="text" name="valorB">
        <br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>