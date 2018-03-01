<?php

use POO\HTML\BootstrapForm;
use POO\Autoloader;
use POO\Personnage;
use POO\Archer;

?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<?php

require 'class/Autoloader.php';
Autoloader::registerShort();

$form = new BootstrapForm($_POST);

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');

$legolas = new Archer('Legolas');

var_dump($merlin, $harry, $legolas);

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