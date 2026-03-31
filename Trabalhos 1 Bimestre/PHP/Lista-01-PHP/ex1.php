<!--
Data: 30/03/2026
Autor: Igor Ryan e Arthur Mendes
Objetivo:
Exercício 1 - Intervalo entre 100 e 200
-->

<!--
Data: 02/03/2026
Autor: Aluno1 e Aluno2
Objetivo:
Exercício 1 - Intervalo entre 100 e 200
-->

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Digite um número: <input type="number" name="num">
    <input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['num'])){
    $num = intval($_POST['num']); 
    if($num >= 100 && $num <= 200){
        echo "O número $num está no intervalo entre 100 e 200";
    }else{
        echo "O número $num NÃO está no intervalo entre 100 e 200";
    }
}
?>

</body>
</html>