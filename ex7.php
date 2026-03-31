<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes
Objetivo:
Exercício 7 - Separar Positivos e Negativos
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite 8 números inteiros separados por vírgula: <input type="text" name="nums"><br>
<input type="submit" value="Separar">
</form>

<?php
if(isset($_POST['nums'])){
    $nums = explode(",", $_POST['nums']);
    $pos = []; $neg = [];

    foreach($nums as $n){
        $n = intval(trim($n));
        if($n>=0) $pos[]=$n;
        else $neg[]=$n;
    }

    echo "Positivos: ".implode(",",$pos)."<br>";
    echo "Negativos: ".implode(",",$neg);
}
?>

</body>
</html>