<?php
			
	$email_to = "kuangyefang@live.ca";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$message_to = "
	Name: $name
	Email: $email
	Subject: $subject
	
	Message:
	$message
	";   

	mail($email_to, $subject, $message_to);
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your message has been sent</title>
<script>
	function index() {
		alert("Your message has been sent. You will be redirected to the homepage.");
    	window.location.assign("../index.php");
	}
	
	document.onload = index();
</script>
</head>

<body>
</body>
</html>