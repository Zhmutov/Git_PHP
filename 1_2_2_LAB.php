<?php
//boolean
$bool = false;
if ($bool == true)
	{
	echo '$bool is: '.'true;',PHP_EOL;
	}
else
	{
	echo '$bool is: '.'false;',PHP_EOL;
	};
	
//integer
$int = 12;
echo '$int is: '.$int.';',PHP_EOL;

//Float
$flo = 12.365;
echo '$flo is: '.$flo.';',PHP_EOL;

//String
$str = "String text";
echo '$str is: '.$str.';',PHP_EOL;


//Array
$array = [1,2,3,4,5,6];
echo ('@array is : '.var_dump($array));

?>