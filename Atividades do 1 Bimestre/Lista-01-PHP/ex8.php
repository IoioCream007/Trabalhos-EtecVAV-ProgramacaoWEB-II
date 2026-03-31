<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes 
Objetivo:
Exercício 8 - Soma de 0 até N com Função
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite n: <input type="number" name="n"><br>
<input type="submit" value="Calcular">
</form>

<?php
function soma($n){
    $s=0;
    for($i=0;$i<=$n;$i++) $s+=$i;
    return $s;
}

if(isset($_POST['n'])){
    $n=intval($_POST['n']);
    echo "Soma de 0 até $n = ".soma($n);
}
?>

</body>
</html>