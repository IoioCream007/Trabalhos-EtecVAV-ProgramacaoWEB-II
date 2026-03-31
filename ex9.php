<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur mendes
Objetivo:
Exercício 9 - Média Aritmética com Função
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite números reais separados por vírgula: <input type="text" name="valores"><br>
<input type="submit" value="Calcular Média">
</form>

<?php
function media($v){
    $s=0;
    foreach($v as $n) $s+=$n;
    return $s/count($v);
}

if(isset($_POST['valores'])){
    $nums = explode(",", $_POST['valores']);
    $valores = array_map('floatval', $nums);
    echo "Média: ".media($valores);
}
?>

</body>
</html>