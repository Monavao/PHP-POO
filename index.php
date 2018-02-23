<?php

require 'form.php';

$form = new Form($_POST);

?>

<form action="#" method="POST">
	<?php
	echo $form->input('Username');
	echo $form->input('Password');
	echo $form->submit();
	?>
</form>