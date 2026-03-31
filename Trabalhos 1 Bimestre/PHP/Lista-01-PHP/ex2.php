<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes
Objetivo:
Exercício 2 - Conversão de Temperatura
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite o valor: <input type="number" name="valor" step="any"><br>
Digite a unidade (C ou F): <input type="text" name="unidade" maxlength="1"><br>
<input type="submit" value="Converter">
</form>

<?php
if(isset($_POST['valor']) && isset($_POST['unidade'])){
    $valor = floatval($_POST['valor']);
    $unidade = strtoupper($_POST['unidade']);

    if($unidade == "F"){
        $c = 5/9 * ($valor - 32);
        echo "$valor °F = $c °C";
    }else if($unidade == "C"){
        $f = ($valor * 9/5) + 32;
        echo "$valor °C = $f °F";
    }else{
        echo "Unidade inválida!";
    }
}
?>

</body>
</html>
Exercício 3 – Calculadora Aritmética