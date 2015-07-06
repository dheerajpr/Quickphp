<?php
	
	//class Div implements division operation
	class Div implements Methodinterface{
		public function compute($number1, $number2){
			if($number2 !== 0)
				return $number1/$number2;
			else
				return 'Division by zero not possible';
		}
	}

?>