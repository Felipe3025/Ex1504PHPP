<?php
$genero = $_POST['genero'];

$sortes = [
    "homem" => [
        "Hoje e seu dia de vencer!",
        "Voce e mais forte do que imagina!",
        "Confie na sua jornada!"
    ],
    "mulher" => [
        "Voce e luz onde for!",
        "Sua forca inspira todos ao redor!",
        "Confie no seu poder interior!"
    ]
];

$sorte = $sortes[$genero][array_rand($sortes[$genero])];
echo "Sorte para voce: $sorte";
?>