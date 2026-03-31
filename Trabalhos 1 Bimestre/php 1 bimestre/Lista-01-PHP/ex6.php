<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes
Objetivo:
Exercício 6 - Série de Fibonacci
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite n: <input type="number" name="n"><br>
<input type="submit" value="Gerar Fibonacci">
</form>

<?php
if(isset($_POST['n'])){
    $n = intval($_POST['n']);
    $a=0; $b=1;

    if($n>=1) echo $a." ";
    if($n>=2) echo $b." ";

    for($i=3;$i<=$n;$i++){
        $c = $a + $b;
        echo $c." ";
        $a=$b;
        $b=$c;
    }
}
?>

</body>
</html>