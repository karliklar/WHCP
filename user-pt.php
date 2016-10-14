  <?php
  //Only process if form isnt empty
  if ( ! empty($_POST )){

/*DataBase Connect*/
$mysqli = new mysqli('localhost', 'KARLIK', 'CUTTIE0220', 'WHCP_login');

 /*Post to DataBase WHCP_login*/
$sql = "INSERT INTO UsersPT (name, phone, username, password) VALUES ('{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['phone'])}', '{$mysqli->real_escape_string($_POST['username'])}', '{$mysqli->real_escape_string($_POST['password'])}')";	
$insert = $mysqli->query($sql);

/*Field Variables*/
    $name = @trim(stripslashes($_POST['name'])); 
    $username = @trim(stripslashes($_POST['username'])); 
    $phone = @trim(stripslashes($_POST['phone']));
    $password = @trim(stripslashes($_POST['password']));
    $repeatpassword = @trim(stripslashes($_POST['repeatpassword']));
    $encpass = md5 ($password);

//Print response from MYSQL
if ($insert){
	echo "success! Row ID:{$mysqli->insert_id}";
} 
	else{
	die ("Error: {$mysqli->errno} : {$mysql->error}");
}

/*check pass=repeatpass*/
if($submit){
    if ($password==$repeatpassword) {
    	if(strlen($username)<50||strlen($name)<5){
    		if(strlen($password)<50||strlen($password)>5){
    			
    		}
    	}
    	else
    		echo "the maximum length for name/email is 50 characters";
    }  
    else 
	{print "We\'ve run into an unexpected error";}
  };

 //Close our connection
  $mysqli->close();

/*Redirect*/
	 header("Location: #loginForm");
	}
?>