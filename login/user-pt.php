<?php
 session_start();
 	 include "connect.php";
//Only process if form isnt empty
  if ( ! empty($_POST )){
/*Field Variables*/
    $name = $_POST['name']; 
    $username = $_POST['username']; 
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $encpass = md5 ($password);

 /*Post to DataBase WHCP_login*/
$q = "INSERT INTO UsersPT (name, phone, username, password) VALUES ('$name', '$phone', '$username', '$encpass')";
$r = mysql_query ($q);

if ($r){
	header("Location: #loginForm");
}
else {
	echo mysql_error();
}


}

  
?>