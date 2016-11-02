<?php

include 'connect.php';

$name = $_POST['name'];
$username = $_POST['username']; 
$phone = $_POST['phone'];
$password = $_POST['password'];

echo $name."<br>";
echo $username."<br>";
echo $phone."<br>";
echo $password."<br>";

?>