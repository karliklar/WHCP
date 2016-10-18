<?php
if (isset($_GET)['success']) && empty ($_GET['success'])){
	echo 'You\'ve been registered successfully!';
}else {
	if (empty($_POST) === false && empty ($errors) === true){
	$register_data = array (
		'name' => $_POST ['name'],
		'username' =>$_POST ['username'],
		'phone' =>$_POST ['phone'],
		'password' =>$_POST ['password'],

	);
	register_user ($register_data);
	header('Location: register.php?success');
	exit();

	} else if (empty($errors) === false) {
		echo output_errors($errors);
	
}
?>