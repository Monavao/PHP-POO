<?php

require 'form.php';
require 'personnage.php';
require 'text.php';

$merlin = new Personnage("Merlin");
$merlin->regenerer();

var_dump($merlin->getVie());

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