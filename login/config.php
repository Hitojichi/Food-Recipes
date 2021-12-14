<?php 
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "recipeuser";
 
    $conn = mysqli_connect($server, $user, $pass, $database);
 
    if (!$conn) {
        die("alert('Gagal tersambung dengan database.')");
    }
?>