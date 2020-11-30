<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Subject', @$_POST['imObjectForm_19_1'], '', false);
	$form->setField('e-mail', @$_POST['imObjectForm_19_2'], '', false);
	$form->setField('text', @$_POST['imObjectForm_19_3'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '9140B45B1D581669DFBB16180F121021' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('engr.imran.k@gmail.com', 'engr.imran.k@gmail.com', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file