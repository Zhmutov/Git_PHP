<?php
//11 Task Стыдно что сам не додумался, но решение подсмотрел в Интернете. Простите.
function input($n)
{
    $w = $n;
    $h = $n; //Сюда размер матрицы
    function s($w, $h, $x, $y)
    {
        return $y ? $w + s($h - 1, $w, $y - 1, $w - $x - 1) : $x + 1;
    }

    for ($i = 0; $i < $h; $i++) {
        for ($j = 0; $j < $w; $j++) printf("%4d", s($w, $h, $j, $i));
        echo "\n";
    }
}

$input = 4;
input($input);

exit();


//10 Task
function guessingGame($computerNumber, $userNumber)
{
    if ($computerNumber > $userNumber) {
        $result = 'Меньше!';
    } elseif ($computerNumber < $userNumber) {
        $result = 'Больше!';
    } elseif ($computerNumber == $userNumber) {
        $result = 'Угадали! Игра окончена!';
    } else {
        $result = 'Нужно ввести числи или число без кавычек!';
    }
    return $result;
}


$computerNumb = 2;
//Не могу вводить значения в консоль, поэтому рандомно ввожу числа.
$userNumb = mt_rand(1, 3);
$play = guessingGame($computerNumb, $userNumb);
echo($play);

exit();

//9 Task

function secondMax($array)
{
    $maxArray = array(max($array)); //Найдем максимальное значение массива
    $diff = array_diff($array, $maxArray);
    return $secondMax = max($diff);
}

$array = array(1, 2, 4, 5, 5,);

var_dump(secondMax($array));


exit();

//8 Task

function merge($firstArray, $secondArray)
{
    return $thirdArray = array_merge($firstArray, $secondArray);
}

$first = array(1, 2, 3, 'cc');
$second = array('a', 'b', 'c');

var_export(merge($first, $second));


exit();

//7 Task

$array = array(1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd', 5 => 'e', 6 => 'f', 7 => 'g', 8 => 'h', 9 => 'i', 10 => 'k', 11 => 'l', 12 => 'm', 13 => 'n', 14 => 'o', 15 => 'p', 16 => 'q', 17 => 'r', 18 => 's', 19 => 't', 20 => 'v', 21 => 'x', 22 => 'y', 23 => 'z');
var_export($array);


exit();
//6 Task
$array = [1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
$col = 0;
$key = "";
$newArray = [];
foreach ($array as $number) {
    //Для первого круга присвоем значение и начнем счет
    if ($col == 0) {
        $key = $number;
        $col++;
    }
    if ($number == $key) {   //проверяем значения и каждый раз переприсваиваем значение пока выполняется условие
        $col++;
        $newArray[$key] = $col;
    } elseif ($col !== 0) {   //Переприсвоем значение и обнулим счетчик.
        $key = $number;
        $col = 1;
    }
}
//Выводим результат
$maxValue = max($newArray);
$searchKey = array_search($maxValue, $newArray);
echo "$maxValue раз встричаеться '$searchKey'";


exit();


//5 Task
//Создаем массив
function createArray($minNumber, $maxNumber, $len)
{
    for ($a = 0; $a < $len; $a++) {

        $array[$a] = mt_rand($minNumber, $maxNumber);
    }
    return $array;
}

//Ищем и меняем значения массива
function changeMinAndMax($returnArray)
{
    $circleMin = 0;
    foreach ($returnArray as $number) {
        //При первом входе в цикл чтобы потом не сравнивать два одиковых числа
        if (!$circleMin) {
            $min = $number;
        }
        if ($circleMin) {
            $min = min($min, $number);
        }
        $circleMin++;
    }
    $circleMax = 0;
    foreach ($returnArray as $number) {
        //При первом входе в цикл чтобы потом не сравнивать два одиковых числа
        if (!$circleMax) {
            $max = $number;
        }
        if ($circleMax) {
            $max = max($max, $number);
        }
        $circleMax++;
    }
    //Находим ключи, чтобы поменть мистами
    $minSearch = array_search($min, $returnArray);
    $maxSearch = array_search($max, $returnArray);
    $returnArray[$minSearch] = $max;
    $returnArray[$maxSearch] = $min;
    return $returnArray;
}

$beginArray = createArray(1, 10, 5);
var_export($beginArray) . PHP_EOL;
$endArray = changeMinAndMax($beginArray);
var_export($endArray);


exit();

//4 Task
function considerNumber($income, $number)
{
    $position = strpos((string)$income, (string)$number);
    $circle = 0;
    $find = 0;
    //Если число будет на первой позиции оно вернет 0, тоевть False.
    //для первой позиции придумал отдельное условие чтобы зашло в цикл
    if ((string)$position == '0') {
        $find = $position + 1;
        $position = $position + 1;
        $circle++;
    } elseif (!$position) {
        $circle = "В числе '$income' нету цифры '$number'!";  //Выводим если не нашли ничего по данным параметрам.
    }


    while ($position) {
        $position = strpos((string)$income, (string)$number, $find);
        if ($position) {
            $find = $position + 1;
            $circle++;
        }

        //echo "$circle - $position  - $find " . PHP_EOL;
    }
    return $circle;
}

$bigNumber = 442158755745;
$findNumber = 5;
echo considerNumber($bigNumber, $findNumber);

exit();

//3 Task
define('STEP', 5);
function sumNumber($circle)
{
    $result = 5;
    $firstPosition = 0;
    if (is_int($circle)) {

        while ($firstPosition <= $circle - 1) {
            $array[$firstPosition] = $result;
            $result = $result + STEP;
            $firstPosition++;

        }
        return $return = array_sum($array);
    } else {
        echo "Нужно вводить число или значение без кавычек!";
    }
}

$sum = sumNumber(3);
var_export($sum);
exit();
//2Task
$array = array(1, 1, 1, 2, 2, 2, 2, 3);

function arrayFunc($array)
{
    $id = 0;
    $compare = 0;

    foreach ($array as $element) {
        if ($compare !== $element) {
            $newArray[$id] = $element;
            $id++;
        }

        $compare = $element;
    }
    return $newArray;
}

var_export(arrayFunc($array));


exit();

//1 Task

$array = array(1, 2, 3, 6, 8, 55, 5,);
function search($x, $array)
{

    $try = array_search($x, $array);
    if ($try) {
        $result = "$x найдено в $try позиции!";
    } else {
        $result = "$x Нету в масиве!";
    }
    return $result;
}

$var = 55;
var_export(search($var, $array));

