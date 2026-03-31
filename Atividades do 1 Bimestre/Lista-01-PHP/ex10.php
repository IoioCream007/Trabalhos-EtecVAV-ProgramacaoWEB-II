<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes 
Objetivo:
Exercício 10 - Ano Bissexto
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite o ano: <input type="number" name="ano"><br>
<input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['ano'])){
    $ano = intval($_POST['ano']);
    if(($ano%400==0) || ($ano%4==0 && $ano%100!=0)){
        echo "$ano é bissexto";
    }else{
        echo "$ano NÃO é bissexto";
    }
}
?>

</body>
</html>