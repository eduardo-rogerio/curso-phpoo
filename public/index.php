<?php

require '../vendor/autoload.php';

$pessoa = new stdClass;
$pessoa->nome = 'Eduardo';
$pessoa->idade = 57;

var_dump($pessoa); 

$usuario = ['nome' => 'Eduardo', 'idade' => 34];

echo '<br>';
echo '<br>';

var_dump((object)$usuario);
