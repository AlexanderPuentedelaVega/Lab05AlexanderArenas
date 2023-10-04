<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercici 01 - Operaciones en PHP</title>
</head>
<body>
    <form method="post" action="">
        Ingresar valor 1:<br> <input type="text" name="valor1"><br>
        Ingresar valor 2:<br> <input type="text" name="valor2"><br>
        Resultado: <br>
        <input type="submit" name="suma" value="suma">
    </form>
<?php
$num1=$_POST['valor1'];
$num2=$_POST['valor2'];
    $suma=$num1 + $num2;
    echo "El resultado de la Suma es : " .$suma;
?>
</body>
</html>