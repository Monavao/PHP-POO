<?php

require 'form.php';
require 'personnage.php';
require 'archer.php';
require 'text.php';

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer('Legolas');

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);

/*
$form = new Form($_POST);
var_dump(Text::withZero(12));

?>

<form action="#" method="POST">
	<?php
	echo $form->input('Username');
	echo $form->input('Password');
	echo $form->submit();
	?>
</form>
*/