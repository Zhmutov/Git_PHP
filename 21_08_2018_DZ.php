<?php
//===========================================================Function===================================================

//11 Task // Не до конца решено
$number = 23456;
if (is_int($number)) {
   // $first = substr($number, 0, 1);
    //var_dump($first);
    $len = strlen($number);
    $step = 0;
    while ($step <$len) {
        $array[$step] = (int)substr($number, $step, 1);
        $step++;
        if ($step == 10) {
            exit();
        }
    }
    $sum = array_sum($array);


}else{
    echo 'Нужно ввести число, или убрать кавычки!';
}

echo($sum);

exit();

//10 Task
define(EMPTYSTR, ' ');
function func($col, $single = 'Яблоко ', $smallPlural = 'Яблока ', $largePlural = 'Яблок ')
{
    $fruitName = '';
    if ($col == 1) {
        $fruitName = "$col $single";
    } elseif ($col > 1 && $col < 5) {
        $fruitName = "$col $smallPlural";
    } else {
        $fruitName = "$col $largePlural";
    }
    return $fruitName;
}

$col = 5;
$apple = func($col);
$pear = func($col, 'Груша ', 'Груши ', 'Груш ');
echo "$apple $pear";
exit();

function funcs(...$args)
{
    var_dump($args);
}

func(1, 2, 3, 4, 5, 6);

exit();

//9 Task
function translate($russianWord)
{
    //Переведем маленькие буквы
    $firstTranslate = strtr($russianWord, array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ъ' => '', 'ь' => ''));
    //Переведем большие буквы
    $secondTranslate = strtr($firstTranslate, array('А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Shch', 'Ы' => 'Y', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya', 'Ъ' => '', 'Ь' => ''));
    return $secondTranslate;
}

$words = 'Жмутов Виктор!';
$result = translate($words);
echo $result;


exit();


//8 Task

function getCommonDivisors($x, $y)
{
//Определим минимальное значение по которому будем по очереди определять все общие делители.
    if (is_int($x) && is_int($y)) {

        $min = min(abs($x), abs($y));
//Определим максимальное значени
        $max = max(abs($x), abs($y));
//Старт цикла
        $index = 1;
//индекс Массива
        $number = 0;

//Цикл в котором все перебераем
        while ($index <= $min) {
            $firstModul = $x % $index;
            $secondModul = $y % $index;
            // Если модуль 1 числа и 2 = 0 значит общий делитель запишем в Массив
            if ($firstModul == 0 && $secondModul == 0) {
                $array[$number] = $index;
                $number++;
            }
//Общий счетчик
            $index++;

            //Аварийный выход с цыкла
            if ($index > $max) {
                echo 'Что-то пошло не так!';
                exit();
            }
        }

        return $array;
    } else {
        echo 'Один из параметров функции не число или в кавычках!';
        exit();
    }
}

$firstNumber = 15;
$secondNumber = 30;
$result = getCommonDivisors($firstNumber, $secondNumber);

print_r($result);
exit();

//7 Task
function arrayAdd($x, $y)
{
    $array = range(1, 10);
    shuffle($array);
    return $array;
}

$result = arrayAdd(1, 10);
print_r($result);


exit();

//6 Task

function sum($first, ...$last)
{
    define(DIVIDER, 2);
    $numbers = func_get_args();
    $sum = 0;
    $x = 0;

    foreach ($numbers as $number) {
        if (is_int($number)) {

            $sum = $sum + $number;
            $x = $x + 1;

        } else {
            echo 'Один из параметров функции не число или в кавычках!';
            Exit();
        }
    }

    return $sum / DIVIDER;
}

;
$result = sum(1, 1, 55);
echo $result;

exit();


//5 Task
function camelCase($incoming)
{

    define(EMPTYSRT, ' ');
    define(LINE, '_');
    $position = strpos($incoming, '_');

    $firstPart = substr($incoming, 0, $position);
    $secondPart = substr($incoming, $position);
    $firstReplace = str_replace(LINE, EMPTYSRT, $secondPart);
    $camelCase = ucwords($firstReplace);
    $secondReplace = str_replace(EMPTYSRT, '', $camelCase);

    return $outparametr = $firstPart . $secondReplace;
}

$text = 'var_test_text';
$result = camelCase($text);
echo $result;

exit();
//4 Task

function Week($day)
{


    switch ($day) {
        case 1:
            $RussionName = 'Понедельник!';
            break;
        case 2:
            $RussionName = 'Вторник!';
            break;
        case 3:
            $RussionName = 'Среда!';
            break;
        case 4:
            $RussionName = 'Четверг!';
            break;
        case 5:
            $RussionName = 'Пятница!';
            break;
        case 6:
            $RussionName = 'Субота!';
            break;
        case 7:
            $RussionName = 'Воскресенье!';
            break;
        default:
            $RussionName = 'Нет такого дня недели! Введите от 1 до 7!';
            break;
    }
    return $RussionName;
}

echo Week(7);

exit();


//3 Task

function AremeticOperations($x, $y, $z)
{
    if ((int)$z !== 0) {

        return $return = ($x - $y) / $z;
    } else {
        echo('Третий параметр не может = 0! Измените его!');
    }
}

$result = AremeticOperations(88, 44, 1);
echo($result);


exit();

//2 Task
function SumNumbers($x, $y)
{
    return $sum = $x + $y;
}

$result = SumNumbers(44, -55);
echo($result);

exit();

//1 Task
function SquareReturn($x)
{
    return $square = $x * $x;
}

$result = SquareReturn(99);
echo $result;

exit();



function showArgs()
{
    $num = func_num_args();
    $args = func_get_args();
    $arg1 = func_get_arg(1);
    var_dump($num, $args, $arg1);
}

showArgs(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
