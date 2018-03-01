<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<?php

require 'form.php';
require 'bootstrapForm.php';
require 'personnage.php';
require 'archer.php';
require 'text.php';

$form = new BootstrapForm($_POST);

?>

<form action="#" method="POST">
	<?php
	echo $form->input('Username');
	echo $form->input('Password');
	echo $form->submit();
	?>
</form>

</body>

</html>