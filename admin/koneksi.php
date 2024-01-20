<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbindihome";

$connection = mysqli_connect($servername, $username, $password, $dbname);
//mysqli_select_db($name);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
$timezone = time() + (60 * 60 * 7);
//date_default_timezone_set("Asia/Makassar");
?>