<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes
Objetivo:
Exercício 3 - Calculadora Aritmética
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Número 1: <input type="number" name="n1" step="any"><br>
Número 2: <input type="number" name="n2" step="any"><br>
Operador (+, -, *, /): <input type="text" name="op" maxlength="1"><br>
<input type="submit" value="Calcular">
</form>

<?php
if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])){
    $n1 = floatval($_POST['n1']);
    $n2 = floatval($_POST['n2']);
    $op = $_POST['op'];

    if($op == "+") echo $n1 + $n2;
    else if($op == "-") echo $n1 - $n2;
    else if($op == "*") echo $n1 * $n2;
    else if($op == "/") echo $n2 != 0 ? $n1 / $n2 : "Erro: Divisão por zero";
    else echo "Operador inválido";
}
?>

</body>
</html>