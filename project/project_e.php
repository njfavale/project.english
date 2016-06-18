<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

if (isset($_POST['name'])) { $name = $_POST['name']; }
if (isset($_POST['yearInSchool'])) { $yearInSchool = $_POST['yearInSchool']; }
if (isset($_POST['email'])) { $email = $_POST['email']; }
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING );
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING );
$major = filter_var($_POST['major'], FILTER_SANITIZE_STRING );

$formerrors = false;

if ($name === '') :
	$err_name = '</div class="error">Please enter your name.</div>';
	$formerrors = true;
	endif;

if ($yearInSchool === ''):
	$err_name = '<div class="yearInSchool">Please select your year in school.';
	$formerrors = true;
	endif;

if ($email === ''):
	$err_email = '<div class="email">Please enter your Illinois email address.';
	$formerrors = true;
	endif;

if (!($formerrors)) :
	$to = "njfavale@gmail.com";
	$subject = "From $name -- Signup Page";
	$message = "$name filled out the form!";
	
	
	if (mail($to, $subject, $message)):
		$msg = "Thanks for signing up!";
	else:
		$msg = "Problem sending the message";
	endif;
endif;
	
endif; //form submitted



?>