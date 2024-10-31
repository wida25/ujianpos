<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case'add': default:
        include ('supplier/add.php');
        break;
    case'delete': 
        include ('supplier/delete.php');
        break;
    case'edit': 
        include ('supplier/edit.php');
        break;
    case'save': 
        include ('supplier/save.php');
        break;
    case'update': 
        include ('supplier/update.php');
        break;
    case'view': 
        include ('supplier/view.php');
        break;
    }