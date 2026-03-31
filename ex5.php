<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes
Objetivo:
Exercício 5 - Somatório de Fatoriais
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite 5 números inteiros separados por vírgula: <input type="text" name="numeros"><br>
<input type="submit" value="Calcular">
</form>

<?php
if(isset($_POST['numeros'])){
    $nums = explode(",", $_POST['numeros']);
    $soma = 0;

    foreach($nums as $n){
        $n = intval(trim($n));
        $f = 1;
        for($i=1; $i<=$n; $i++) $f *= $i;
        $soma += $f;
    }

    echo "Soma dos fatoriais: ".$soma;
}
?>

</body>
</html>