<?php
$limite = $_POST['limite'];
$numero = rand(0, $limite);
echo "Numero gerado entre 0 e $limite: $numero";
?>