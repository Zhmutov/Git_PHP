<?php

//===================================String=========================================================
//12 Task
$str = 'f';

$result = ctype_upper($str);
if ($result){
    echo 'Большая';
}else {
    echo 'Маленькая';
}


exit();

//11 Task
$str = '<f><t><i><G><s><b>';

$result = strip_tags($str, '<b> <i>');
echo $result;


exit();

//10 Task
$str = '1234567890';

$array = str_split($str, 2);

$newStr = '';
$delimiter = '-';
$i = 0;
foreach ($array as $value){
    if ($i==0){
        $newStr .= $value;
        $i++;
    }else {
        $newStr .= $delimiter.$value;
    }
}
echo $newStr;


exit();

//9 Task

$str = ';dfjkl.f;jg..erer';

$points = '..';
$find = strstr($str, $points);
$scr = substr($find, 0, 2 );


if ($scr == $points){
    echo 'есть';
}else {
    echo 'Нет';
}


//8 Task
$str = 'ljdfgk..;dfgk';
$firstPoint = stripos($str, '.');
$len = strlen($str);
$i = 0;
    while ($i<=$len) {

    }



$secondPoint = stripos($str, '.', $firstPoint+1);


echo $firstPoint;
echo $secondPoint;

exit();
//7 Task
$str = '1a2b3c4b5d6e7f8g9h0';
$i = 0;
while ($i<=9) {
    $str = str_replace($i, '', $str);
    $i++;
}
echo $str;


exit();

//6 task
$str = 'aabbccrrtabc';
$firstReplace = str_replace('a', '1', $str);
$secondReplace = str_replace('b', '2', $firstReplace);
$thirdReplace = str_replace('c', '3', $secondReplace);

echo $thirdReplace;

exit();

//5 Task
$string = '31.12.2013';

echo str_replace('.', '-', $string);

exit();

//4 Task
define('FIVE',5);
$string = 'TheLargestText';
$len = strlen($string);
if ($len > FIVE) {
    $result = substr($string, 0,FIVE);
    echo "$result...";
}else{
    echo $string;
}

exit();

//3 Task
define('PNG', '.pnj');
define('JPG', '.jpg');
$string = 'Format Text.pnj';
$len = strlen($string) - 4;
$lastWords = substr($string,$len);
if ($lastWords == PNG || $lastWords == JPG) {
    echo 'Yes';
} else {
    echo 'No';
}

exit();

//2Task
define('HTTP', 'http://');
define('HTTPS', 'https://');

$string = 'https://TestLine';
$findHttp = strripos($string, HTTP);
$findHttps = strripos($string, HTTPS);
if (isset($findHttp) || isset($findHttps)) {
    if (!$findHttp && !$findHttps) {
        echo 'Yes';
    } else {
        echo 'No';
    }
}else{
    echo 'No';
}



exit();

//1 Task
$string = 'The last tree';
$len = strlen($string)-3;
$lastTree = substr($string, $len);
echo $lastTree;