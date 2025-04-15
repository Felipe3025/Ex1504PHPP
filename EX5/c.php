<?php
$cores = [
    "Azul" => "Cor da tranquilidade e confianaa.",
    "Vermelho" => "Cor da paixao e energia!",
    "Verde" => "Cor da esperanca e renovacao.",
    "Amarelo" => "Cor da alegria e criatividade.",
    "Roxo" => "Cor da sabedoria e espiritualidade."
];

$cor = array_rand($cores);
$frase = $cores[$cor];

echo "Cor sorteada: $cor<br>Frase: $frase";
?>