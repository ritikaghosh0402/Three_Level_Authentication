<?php
$host="localhost";
$username="root";
$password="";
$database="three_level_authentication";

$con=new mysqli($host,$username,$password,$database);
if($con->connect_error)
{
    die("ERROR:".$con->connect_error);
}
?>