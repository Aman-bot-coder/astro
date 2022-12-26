<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databse = "astro";

$conn = mysqli_connect($server,$username,$password,$databse);

if($conn){
    echo "Scuess";
}else{
    die("Error" . mysqli_connect_error());
}
?>
