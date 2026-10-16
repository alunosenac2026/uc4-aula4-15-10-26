<?php

$nota1 = rand(0, 10);
$nota2 = rand(0, 10);
$media = ($nota1 + $nota2) / 2;

echo "Nota 1: " . $nota1 . "<br>";
echo "Nota 2: " . $nota2 . "<br>";
echo "Média: " . $media . "<br>";

if ($media >= 7) {
    echo "Resultado: Aprovado!";
} else {
    echo "Resultado: Reprovado!";
}

?>