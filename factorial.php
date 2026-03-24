<?php
if ($_POST) {
    $num = $_POST['num'];
    $factorial = 1;

    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }

    echo "Factorial: " . $factorial . "<br>";
}
?>

<form method="post">
    Número: <input type="number" name="num"><br>
    <input type="submit" value="Calcular">
</form>

<a href="index.php">Volver</a>