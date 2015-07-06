<?php
	
	require_once 'classes/Calculator.php';
	require_once 'classes/Methodinterface.php';
	require_once 'classes/Add.php';
	require_once 'classes/Sub.php';
	require_once 'classes/Div.php';
	require_once 'classes/Mul.php';


	$output = '  Computed Value is :  ';
	$errors = FALSE;

	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];


	if(!is_numeric($number1)){
		$errors = TRUE;
		echo 'Invalid First number <br />';
	}

	if(!is_numeric($number2)){
		$errors = TRUE;
		echo 'Invalid Second number <br />';
	}

	if(isset($_POST['opmethod']))
		$opmethod = $_POST["opmethod"];
	else{
		$errors = TRUE;
		echo 'Please select operator <br />';
	}


	
	if (!$errors) {
		$methodop = $opmethod;
		$newresult = New Calculator(intval($number1),intval($number2));  
		$newresult->setmethod(new $methodop);
		echo $output . $newresult->getresult();  
	}

	


?>
