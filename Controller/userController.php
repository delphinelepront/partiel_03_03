<?php

include('Model/function.php');

if(isset($_REQUEST['lname'])){
    $lname = $_REQUEST['lname'];
    $fname = $_REQUEST['fname'];
    $mail = $_REQUEST['email'];
    $society = $_REQUEST['society'];
    $status = $_REQUEST['status'];
    register($lname, $fname, $mail, $society, $status);
}

include('View/body.php');
