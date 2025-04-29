<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    
    function maiorNumero($num1, $num2, $num3) {
        
        $numeros = array($num1, $num2, $num3);

        return max($numeros);
    }

    $maior = maiorNumero($num1, $num2, $num3);
}


echo "A multiplicação entre $num1 e $num e $num3 é: $numeros";

?>


