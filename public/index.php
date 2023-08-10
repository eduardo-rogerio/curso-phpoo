<?php

require '../app/classes/Login.php';

$login = new Login;
$login->email = 'eduardo@email.com';
$login->password = '1234567';
echo $login->auth();
