<?php
    $database= new mysqli("localhost","root","","fantasticfour");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }
?>