<?php

//================================================Branching=============================================================
//10 Task
$minutes = 17;
//Цыкл зеленого и красного цвета состоит с 5 минут 3+2
difine(CICLE, 5);
$module = $minutes % CICLE;
if ($minutes >= 0 && $minutes <= 60) {
//Если по модулю остача 0,1,2 - зеленый цвет. 3,4 - красный.
    if ($module == 0 || $module == 1 || $module == 2) {
        echo('Зеленый цвет!');
    } elseif ($module = 3 || $module = 4) {
        echo('Красный цвет!');
    }
} else {
    echo('Время не входит в диапазон разрешенного!');
}
exit();

//9 Task
$row = true;
$degree = 44;
if ($degree > 0 && $degree <= 360) {

//60 мин это 15 градусов. Определим сколько мин от введенных градусов.
//для примера 55 * 60 / 15 = 220 мин. тоесть это 3 час 40 мин. или 220/60 3.66 часа.
    $x = ($degree * 60) / 15;

//Если меньше 60 мин. Выведем только мин.
    if ($x < 60) {
        echo $x . ' мин.';
    } elseif ($x >= 60) {
//Больше часа. Определим есть ли минуты?
        $integer = $x / 60;
//Проверяем есть ли знаки после челого числа.
        $row = strpos($integer, '.');
//Есть знаки после целого числа. Время состоит с часов и минут
        if ($row == 1 || $row == 2) {
//Перед . будут часы
            $hours = substr($integer, 0, $row);
            echo $hours . ' час(ов) ';
//Умножим часы на 60 мин и отнимем от всех минут, остача - Минуты
            $minutes = $x - ($hours * 60);
            echo $minutes . ' мин.!';
        }
    }
//Нету знаков после целого числа - выводим челый час:
    if ($row == false) {
        echo $integer . ' час(ов)!';
    }

} else {
    echo('Введенное число не соответсвует допустимому диапазону!');
}
exit();

//8 Task

$number = 123023;

$first = substr($number, 0, 1);
$second = substr($number, 1, 1);
$third = substr($number, 2, 1);
$fourth = substr($number, 3, 1);
$fifth = substr($number, 4, 1);
$sixth = substr($number, 5, 1);


$part1 = $first + $second + $third;
$part2 = $fourth + $fifth + $sixth;

if ($part1 == $part2) {
    echo $first . ' + ' . $second . ' + ' . $third . ' = ' . $fourth . ' + ' . $fifth . ' + ' . $sixth . PHP_EOL;
    echo 'Yes: ' . $part1 . ' = ' . $part2;
} else {
    echo 'No: ' . $part1 . ' <> ' . $part2;
}

exit();

//7 Task
$number = mt_rand(10000, 99999);
$first = substr($number, 0, 1);
$second = substr($number, 1, 1);
$third = substr($number, 2, 1);
$fourth = substr($number, 3, 1);
$fifth = substr($number, 4, 1);

if ($number > 9999 && $number <= 99999) {

    echo('first:  ' . $first . PHP_EOL);
    echo('second: ' . $second . PHP_EOL);
    echo('third:  ' . $third . PHP_EOL);
    echo('fourth: ' . $fourth . PHP_EOL);
    echo('fifth:  ' . $fifth . PHP_EOL);
} else {
    echo($number . ' не пятизначное число!');
}
exit();

//6 Task
$High = false;
$Year = mt_rand(1, 2018);//1704;
define(FOUR,  4);
define(ONEHUNDRED, 100);
define(FOURHUNDRED, 400);
//Проверим делится ли на 400 (остача по модулю)
$HighYearFourHundred = $Year % FOURHUNDRED;
//Проверим делится ли на 4 (остача по модулю)
$HighYearFour = $Year % FOUR;
//Проверим делится ли на 100 (остача по модулю)
$HighYearOneHundred = $Year % ONEHUNDRED;

if ($HighYearFourHundred == 0) {
    $High = true;
} elseif ($HighYearFour == 0 && $HighYearOneHundred == 0) {
    $High = false;
} elseif ($HighYearFour == 0 && $HighYearOneHundred !== 0) {
    $High = true;
}
//True - Высокосный год, False - Не высокосный
if ($High) {
    echo($Year . ' - Высокосный год!');
} else {
    echo($Year . ' - Не высокосный год!');
}


exit();

//5 Task

$month = 2;
switch ($month) {
    case ($month <= 2 || $month == 12):
        echo('Зима!: ' . $month);
        break;
    case ($month <= 5 && $month > 2):
        echo('Весна!: ' . $month);
        break;
    case ($month <= 8 && $month > 5):
        echo('Лето!: ' . $month);
        break;
    case ($month <= 11 && $month > 8):
        echo('Осень!: ' . $month);
        break;
    default:
        echo('WTF?');
        break;
}


exit();

//4 Task
$tree = false;
$five = false;
$number = 17;
//Проверим есть ли остача по модулю при деление на 5
$module5 = $number % 5;
if ($module5 == 0) {
    $five = true;
}
//Проверим есть ли остача по модулю при деление на 5
$module3 = $number % 3;
if ($module3 == 0) {
    $three = true;
}

if ($five && $three) {
    echo($number . ' divide by 3 and 5');
} elseif ($five) {
    echo($number . ' divide by 5');
} elseif ($three) {
    echo($number . ' divide by 3');
} else {
    echo($number . ' Do not divide by 3 or 5');
}


exit();

//3 Task
$str = '523456';

$first = substr($str, 0, 1);

if ($first == 1 || $first == 2 || $first == 3) {
    echo('Yes: ' . $str);
} else {
    echo('No: ' . $str);
}


exit;


//2 Task

$first = mt_rand(1, 40);
$second = mt_rand(1, 40);

if ($first > $second) {
    echo('Больше');
} elseif ($first < $second) {
    echo('Меньше');
} else {
    echo('Эти числа равны!');
}

exit();


//1 Task

$a = 10;
$b = 15;
$c = 10;

if ($a == $b || $b == $c || $a == $c) {
    $a = $a + 5;
    $b = $b + 5;
    $c = $c + 5;
    echo ('$a: ' . $a . ', $b: ' . $b . ', $c: ' . $c) . PHP_EOL;
} else {
    echo ("Равных Нет!") . PHP_EOL;
}
