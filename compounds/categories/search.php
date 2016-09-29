  <?php
/*DataBase Connect*/
define ('DB_NAME', 'WHCP-meds');
define ('DB_USER', 'KARLIK');
define ('DB_PASSWORD', 'CUTTIE0220');
define ('DB_HOST', 'LOCALHOST');

$conn = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD); 
if (!$conn){
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db (DB_NAME, $conn);
if (!$db_selected){
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

	
/*Field Variables*/
	$name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['dose'])); 
    $phone = @trim(stripslashes($_POST['form']));
	

	
/*Post to DataBase WHCP-meds*/
$sql = "INSERT INTO FormData (name, dose, form) VALUES ($name', '$dose', '$form')";	
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
		} 
           

/*Redirect*/
	 header("Location: search-results.html");
	 
	