<?php
$time = $_POST['time'];

$frases = [
    "palmeiras" => [
        "Avanti Palestra! A vitoria e certa!",
        "Com raaa e paixao, o Verdao sempre vence!"
    ],
    "corinthians" => [
        "Vai Corinthians! Nunca foi sorte, sempre foi fe!",
        "O bando de loucos nunca desiste!"
    ],
    "sao_paulo" => [
        "Tricolor guerreiro, a vitoria te espera!",
        "Sao Paulo e grande porque nunca se entrega!"
    ],
    "santos" => [
        "Peixe valente, historia de campeao!",
        "O Santos e gigante dentro e fora de campo!"
    ]
];

$frase = $frases[$time][array_rand($frases[$time])];
echo "Frase de incentivo: $frase";
?>