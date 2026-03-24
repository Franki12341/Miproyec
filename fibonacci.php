<?php
if ($_POST) {
    $n = $_POST['num'];

    $a = 0;
    $b = 1;

    echo "Serie Fibonacci: <br>";

    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
}
?>

<form method="post">
    Cantidad de términos: <input type="number" name="num"><br>
    <input type="submit" value="Calcular">
</form>

<a href="index.php">Volver</a>