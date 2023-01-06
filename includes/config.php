<?php

ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("Asia/Calcutta");

try {

    $con = new PDO("mysql:dbname=streamonk;host=localhost", "root", "hello");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (PDOException $e) {

    exit("Connection failed: " . $e->getMessage());

}

?>