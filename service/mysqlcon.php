<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="schoolmanagementsystemdb";
$link=mysqli_connect("$host", "$username", "$password")or die("Cannot Connect");
mysqli_select_db("$db_name")or die("Cannot Select DB");
?>
