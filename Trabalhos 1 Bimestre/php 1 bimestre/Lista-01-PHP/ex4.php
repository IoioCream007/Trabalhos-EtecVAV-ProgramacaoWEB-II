<!--
Data: 30/03/2026
Autor: igor Ryan e Arthur Mendes
Objetivo:
Exercício 4 - Triângulo Numérico
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite um número n: <input type="number" name="n">
<input type="submit" value="Gerar Triângulo">
</form>

<?php
if(isset($_POST['n'])){
    $n = intval($_POST['n']);
    for($i=1; $i<=$n; $i++){
        for($j=1; $j<=$i; $j++){
            echo $j." ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>