<?php 
$db_server = "localhost";
$db_user ="root";
$db_pass ="";
$db_name ="crudoperation";
$con ="";
$con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if(!$con) {
    die(mysqli_error($con));
}
?>