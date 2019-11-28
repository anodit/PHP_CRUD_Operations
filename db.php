<?php
//     loginapp is a database which we have created in the phpMyAdmin.
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection){
        die("Connection Failed");
    }
?>
