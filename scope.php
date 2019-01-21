<?php
class A{
	public $bar;
	public function __construct ($bar) {
	$this->bar= $bar;
}
public function myPrint (){
	echo $this->bar;
}
}
$myFirstObject = new A('test');
//$myFirstObject->myPrint();
echo $myFirstObject->bar;
?>