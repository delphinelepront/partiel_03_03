<?php

include('Model/function.php');

if (isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    connection($name, $password);
}

include('View/body.php');
