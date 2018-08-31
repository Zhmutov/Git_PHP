<?php
//=================================Veriables=======================================================
//4 Task
$fio = 'Zhmutov Viktor Aleksandrovech';

$posOne = strpos($fio, ' ');

$firstName = substr($fio, 0, $posOne);
$secondName = substr($fio, $posOne+1, 1);

$posTwo = strpos($fio, ' ', $posOne+1);
$patronymic = substr($fio, $posTwo+1, 1);

echo "$firstName $secondName. $patronymic.";


exit();

//3 Task
$number = 1234;
$array = str_split($number,1);
$sum = 0;
foreach ($array as $value){
    $sum +=$value;
}

echo $sum;


exit();

//2 Task

define('KM','1000');
$metr = 255;
$klMetr = $metr/KM;
echo $klMetr.' км.';

exit();

//1 Task

defined(MAIL )|| define(MAIL, 'zhmutov@i.ua');
$s = strpos(MAIL, '@');

echo (MAIL) . PHP_EOL;

echo(substr(MAIL, 0,$s)).PHP_EOL;
echo(substr(MAIL, $s+1));