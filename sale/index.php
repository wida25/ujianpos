<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case'add': default:
        include ('sale/add.php');
        break;
    case'delete': 
        include ('sale/delete.php');
        break;
    case'edit': 
        include ('sale/edit.php');
        break;
    case'save': 
        include ('sale/save.php');
        break;
    case'update': 
        include ('sale/update.php');
        break;
    case'view': 
        include ('sale/view.php');
        break;
    }