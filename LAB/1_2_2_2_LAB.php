<?php
//Boolean to Integer
$bool = true;
$bool = (int)$bool;
echo ('Boolean to Integer "True": ');
var_dump($bool);
$bool = false;
$bool = (int)$bool;
echo ('Boolean to Integer "False": ');
var_dump($bool);


//Integr to Boolean
$int = 1;
$int = (bool)$int;
echo ('Integr to Boolean 1: ');
var_dump($int);

$int = 0;
$int = (bool)$int;
echo ('Integr to Boolean 0: ');
var_dump($int);

$int = -33;
$int = (bool)$int;
echo ('Integr to Boolean -33: ');
var_dump($int);

//=============================================================

//Float to Integer
$flo = 12.33;
$flo = (int)$flo;
echo ('Float to Integer 12.33: ');
var_dump($flo);


//Integer to Float
$int = 33;
$int = (float)$int;
echo ('Integer to Float 33: ');
var_dump($int);

//=============================================================

//String to Integer
$str = '10 points';
$str = (int)$str;
echo ('String to Integer 10 points: ');
var_dump($str);

$str = 'points';
$str = (int)$str;
echo ('String to Integer points: ');
var_dump($str);

//Integer to String
$int = 22;
$int = (string)$int;
echo ('Integer to String 22: ');
var_dump($int);

//=============================================================

//Array to String
$array = [1,2,3];
$array = (string)$array;
echo ('Array to String $array: ');
var_dump($array);

//String to Array
$str = 'point, men, coin';
$str = (array)$str;
echo ('String to Array $str: ');
var_dump($str);

//=============================================================

//Array to Object
$array = [1,2,3];
$array = (object)$array;
echo ('Array to Object $array: ');
var_dump($array);

//Object to Array
$obj = [1,2,3];
$obj = (array)$obj;
echo ('Object to Array $obj: ');
var_dump($obj);


















?>