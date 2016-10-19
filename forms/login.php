<?php
 session_start();
 	 include "connect.php";
//Only process if form isnt empty
  if ( ! empty($_POST )){
/*Field Variables*/
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $encpass = md5 ($password);

 /*Post to DataBase WHCP_login*/
$q = "SELECT * FROM UsersPT WHERE username='username' AND password='password'";
$r = mysql_query ($q);
if(!$row =mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect!";
}
else{
	$_SESSION['id'] = $row['id'];
}

if ($r){
	header("Location: ptportal.html");
}
else {
	echo mysql_error();
}


}

  
?>