<?php
if ($_POST) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $resultado = $n1 + $n2;
    echo "Resultado: " . $resultado . "<br>";
}
?>

<form method="post">
    Número 1: <input type="number" name="num1"><br>
    Número 2: <input type="number" name="num2"><br>
    <input type="submit" value="Sumar">
</form>

<a href="index.php">Volver</a>