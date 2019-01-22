<?php
class A
{
	public static $myvariable;
	public static function myPrint()
	{
		echo self::$myvariable;
	}
}
A::$myvariable ='Hello World!!!';
A::myPrint();
?>