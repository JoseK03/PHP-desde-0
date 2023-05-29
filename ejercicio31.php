<?php
$txtNombre = $_POST["txtNombre"];




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
    <?php if($_POST){
 
    
    echo "<strong>Hola </strong>". $txtNombre;
    }
    ?>
   <form action="ejercicio31.php" method="post">

        <input value= "<?php echo $txtNombre; ?>" type="text" name="txtNombre">

        <input type="submit" value="Enviar informacion">

   </form>
</body>
</html>