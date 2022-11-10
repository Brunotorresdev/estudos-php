<?php 
// ---- Array

$ingredientes = [
    'acucar', 
    'farinha', 
    'ovo',
];

?> 

<?php 
// ---- Array Spread

$bolo1 = [
    'acucar', 
    'farinha', 
    'ovo',
];

$bolo2 = [
   ...$bolo1,
   'corante'
];

echo $bolo2[0];

//para mostrar o array na tela:
// print_r($bolo2);
?> 

