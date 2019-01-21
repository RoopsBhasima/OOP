<?php
class A
{
	function __construct($bar)
	{
	echo $bar;
}
function foo()
	{
		echo "foo here!";
	}
}
$myFirstObject= new A('test');
?>

<?php
class B
{
	var $bar;
	function __construct($bar)
	{
		$this->bar = $bar;
	}
	function myPrint()
	{
		echo $this->bar;
	}
}
$myFirstObject= new B('test');
$myFirstObject->myPrint();
?>

<?php
class C{
	public $bar;
	public function __construct ($bar) {
	$this->bar= $bar;
}
public function myPrint (){
	echo $this->bar;
}
}
$myFirstObject = new C('test');
//$myFirstObject->myPrint();
echo $myFirstObject->bar;
?>