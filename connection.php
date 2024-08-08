<?php
$host = "localhost";
$username = "root";
$password = "Re0501900605";
$dbname = "tour";

//create the connection object
$conn = new mysqli( $host , $username , $password, $dbname);

//(optional) check if the connection was successful
if ($conn->connect_error){
    die($conn->connect_error);
}else{
    //Echo "Connection successfull";
}
?>


