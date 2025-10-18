<?php

$num1 = 8;
$num2 = 0;

try {
    if($num2 === 0){
        throw new Exception ("⚠️ Estàs intentant dividir per 0");
    }
    $resultat = $num1 / $num2;
    echo "El resultat és: $resultat";

} catch (\Throwable $th) {
    echo "S'ha detectat el següent error: " . PHP_EOL . $th->getMessage();
}

?>