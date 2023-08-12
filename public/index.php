<?php

require '../vendor/autoload.php';

use app\classes\Login;

$login = new Login;

$resul = $login->auth('eduardo@email.com',123234);
var_dump($login);
