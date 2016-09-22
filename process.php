  <?php
/*DataBase Connect*/
define ('DB_NAME', 'WHCP-Forms');
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

/*Email Var info*/
	$email_from =$name;
    $email_rx = 'patricial@woodlandhillspharmacy.com,info@woodlandhillspharmacy.com';
	$email_md = 'KARLIK@woodlandhillspharmacy.com, info@woodlandhillspharmacy.com';
	$email_cont = 'info@woodlandhillspharmacy.com';
	$email_topic = $_POST['email_subject'];
	
/*Field Variables*/
	$name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $phone = @trim(stripslashes($_POST['phone']));
	$mdname = @trim(stripslashes($_POST['mdname']));
	$date = @trim(stripslashes($_POST['date']));
	$time = @trim(stripslashes($_POST['time']));
		$street = implode(', ', $_POST['street']);
	$city = @trim(stripslashes($_POST['city']));
	$state = @trim(stripslashes($_POST['state']));
	$zip = @trim(stripslashes($_POST['zip']));
		$rx = implode(', ', $_POST['rx']);
		$auto = implode(', ', $_POST['auto']) . ' ' . @trim(stripslashes($_POST['autocheck']));
	$textnotify = @trim(stripslashes($_POST['textnotify']));
		$typearray = implode(', ', $_POST['mdtype']);
	$subject = @trim(stripslashes($_POST['subject'])); 
    $comment = @trim(stripslashes($_POST['comment']));
	$terms = @trim(stripslashes($_POST['terms']));
	
/*Additional Functions*/
 	function clean_string($string) 
	{ $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);}
	 

/*Email Body*/
	if ($email_topic=='MD Referral Request'){
		 $body =
			'MD Referral Request' . "\n\n" . '_____________________' . "\n\n" .
			'Patient Info: ' . 	$name . ', ' . $email . ', ' . $phone . "\n\n" . 
			'Address: ' . "\n\n" . 
				$street . "\n\n" .			
				$city .',' .clean_string($state)  . ' ' . $zip . "\n\n" . 
			'MD Type Requested: ' . $typearray . "\n\n" . 			
			'Other types of medicine requested: ' . $comment . "\n\n" .
		
				'Please forward all Dr orders, prescription refills, autoship forms and MD referrals to the appropriate rep.' . "\n\n" .
				$name . ' ' . $terms . ' ' . 'to the terms and conditions listed.';
		}
		
	elseif ($email_topic=='Online Refill Request'){
	$body =
	'Online Refill Request' . "\n\n" . '_____________________' . "\n\n" .
		'Patient Info: ' . 	$name . ', ' . $email . ', ' . $phone . "\n\n" . 
		'Prescribing Doctor: ' . $mdname . "\n\n" . 
		'Pick Up Date: ' . $date . "\n\n" . 
		'Pick Up Time: ' . $time . "\n\n" .
		'Refill RX Number(s): ' . $rx . "\n\n" . "\n\n" .
		
		'Auto Ship?: ' . $auto . "\n\n" .
		'Text Notify?: ' . $textnotify . "\n\n" ."\n\n" .
		
		'Additional Comments: ' . $comment . "\n\n" .
		'Please forward all Dr orders, prescription refills, autoship forms and MD referrals to the appropriate rep.' . "\n\n" .
		$name . ' ' . $terms . ' ' . 'to the terms and conditions listed.';
		}
	
	elseif ($email_topic=='Auto Ship Request'){
		$body =
		'Auto Ship Request' . "\n\n" . '_____________________' . "\n\n" . 
			'Patient Info: ' . 	$name . ', ' . $email . ', ' . $phone . "\n\n" .  										
			'Requested Start Date:' . $date .  "\n\n" . "\n\n" . 
			'Auto Ship RX Number(s): '  . $auto . "\n\n" .	
			'Text Notify?: ' . $textnotify . "\n\n" ."\n\n" .
		
		'Please forward all Dr orders, prescription refills, autoship forms and MD referrals to the appropriate rep.' . "\n\n" .
		$name . ' ' . $terms . ' ' . 'to the terms and conditions listed.';		
		}
		
	elseif ($email_topic=='Contact Us Request'){
		$body = 
		'Contact Us Request from' .  $name . "\n\n" .  
			'Contact Info: ' . $email . ',  ' . $phone . "\n\n" . 
			'Subject: ' . $subject . "\n\n" . 
			'Comment: ' . $comment . "\n\n" .  "\n\n" .
		
		'Please forward all Dr orders, prescription refills, autoship forms and MD referrals to the appropriate rep.' . "\n\n" .
		$name . ' ' . $terms . ' ' . 'to the terms and conditions listed.';
		}
	else
	{$body = 'We\'ve run into an unexpected html code error';}
	
/*Post to DataBase WHCP-Forms*/
$sql = "INSERT INTO FormData (email_subject, name, email, phone, mdname, date, time, street, city, state, zip, rx, auto, textnotify, mdtype, subject, comment, terms) VALUES ('$email_topic', '$name', '$email', '$phone', '$mdname', '$date', '$time', '$street', '$city', '$state', '$zip', '$rx', '$auto', '$textnotify', '$typearray', '$subject', '$comment', '$terms')";	
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
		} 
           
	
/*Send Email*/
if ($email_topic=='MD Referral Request')
{$success = @mail($email_md, $email_topic, $body, 'From: <'.$email.'>');}
elseif ($email_topic=='Online Refill Request')
{$success = @mail($email_rx, $email_topic, $body, 'From: <'.$email.'>');}
elseif ($email_topic=='Auto Ship Request')
{$success = @mail($email_rx, $email_topic, $body, 'From: <'.$email.'>');}
elseif ($email_topic=='Contact Us Request')
{$success = @mail($email_cont, $email_topic, $body, 'From: <'.$email.'>');} 
	else
	{print "We\'ve run into an unexpected error";}
	 
/*Redirect*/
	 header("Location: thankyou.html");
	 
	