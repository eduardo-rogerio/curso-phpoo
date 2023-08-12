<?php

require '../vendor/autoload.php';

use app\classes\Login; 

$login = new Login; 
$login->email = 'eduardo@email.com'; 
$login->password = 'e4u2dfd7'; echo $login->auth();
