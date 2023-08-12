<?php

require '../vendor/autoload.php';

use app\classes\Crud;

$crud = new Crud;
var_dump($crud->read());
