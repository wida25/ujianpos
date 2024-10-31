<?php
$module = isset($_GET['m']) ? $_GET['m'] : 'home';
switch ($module) {
    case'home': default:
        include ('home.php');
        break;
    case'sale':
        include ('sale/index.php');
        break;
    case'supplier':
        include ('supplier/index.php');
        break;
    }