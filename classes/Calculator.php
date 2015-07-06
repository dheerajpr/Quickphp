<?php


class Calculator{  
		
		  protected $result; 
		  protected $opmethod; 

		  public function __construct($number1, $number2)  
		   {  
		     $this->number1 = $number1;  
		     $this->number2 = $number2;  
		   }  

		  //set method to operation selected 
		  //if Add method is selected Methodinterface selects Add class 
		  public function setmethod( Methodinterface $opmethod){  
		    	$this->opmethod = $opmethod;
		    }  
		   //Get the computed value using the class based on operaor selected
		   //uses compute method of the class based on selected operator  
		   public function getresult(){
		   		return $this->opmethod->compute($this->number1,$this->number2);
		    }
	}  

?>