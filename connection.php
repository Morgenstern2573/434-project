<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fashionhouse";


$con = mysqli_connect($host, $username, $password, $dbname, 3307);
if(!$con){
    echo("failed to connect: ".mysqli_connect_error());
}
?>