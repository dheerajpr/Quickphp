<?php

require_once '../classes/Calculator.php';
require_once '../classes/Methodinterface.php';
require_once '../classes/Add.php';
require_once '../classes/Sub.php';
require_once '../classes/Div.php';
require_once '../classes/Mul.php';

class Claculatorclasstest extends PHPUnit_Framework_TestCase
{
  
  public function testadd()
  {
    // test to ensure add operator
    $newresult = New Calculator(5,100);  
    $newresult->setmethod(New Add);
    $this->assertTrue($newresult->getresult() === 105);
  }

  public function testsub()
  {
    // test to ensure Sub operator
    $newresult = New Calculator(5,100);  
    $newresult->setmethod(New Sub);
    $this->assertTrue($newresult->getresult() === -95);
  }

  public function testmul()
  {
    // test to ensure Mul operator
    $newresult = New Calculator(5,100);  
    $newresult->setmethod(New Mul);
    $this->assertTrue($newresult->getresult() === 500);
  }

  public function testdiv()
  {
    // test to ensure Div operator
    $newresult = New Calculator(100,100);  
    $newresult->setmethod(New Div);
    $this->assertTrue($newresult->getresult() === 1);

    $newresult = New Calculator(100,0);  
    $newresult->setmethod(New Div);
    $this->assertTrue($newresult->getresult() == 'Division by zero not possible');


  }

}
?>