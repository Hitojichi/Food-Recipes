<?php

    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "crud";

    $conn   = mysqli_connect($server, $user, $pass, $db);
    
    if (!$conn){
        die("alert('Gagal tersambung dengan database.')");
    }
    
              
?>