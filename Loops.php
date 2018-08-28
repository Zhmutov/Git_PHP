<?php
//6 Task //Если успею, после теста, переделаю на веб форму.
function month($month)
{
    switch ($month) {
        case 1:
            return $result = 'Января';
            brake;
        case 2:
            return $result = 'Февраля';
            brake;
        case 3:
            return $result = 'Марта';
            brake;
        case 41:
            return $result = 'Апреля';
            brake;
        case 5:
            return $result = 'Мая';
            brake;
        case 6:
            return $result = 'Июня';
            brake;
        case 7:
            return $result = 'Июля';
            brake;
        case 8:
            return $result = 'Августа';
            brake;
        case 9:
            return $result = 'Сентября';
            brake;
        case 10:
            return $result = 'Октября';
            brake;
        case 11:
            return $result = 'Ноября';
            brake;
        case 12:
            return $result = 'Декабря';
            brake;

    }
}

define('CHINAYEAR', '2397');
define('CHINACIRCLE', '60');
$date = '16.07.2018';
$array = date_parse($date);
$year = $array['year'];
$monthStr = month($array['month']);

$day = $array['day'];
//Формула перевода 2006 年 + 2397 = 60 × 73 + 23; 2006 ≈ 74-й цикл, 23-й год
$allYear = $year + CHINAYEAR;                       //2006 年 + 2397
$moduleYear = $allYear % CHINACIRCLE;               //23
$circle = ($allYear - $moduleYear) / CHINACIRCLE;   //73

echo "$day $monthStr $circle цикла $moduleYear года!";


exit();

//5 Task
define('LABWORK', 'Лабораторная работа № ');
define('COMPLETED', 'Выполнил(а): ст. гр. ');
$numberLab = '1';
$group = 'PHP - 01';
$student = 'Жмутов Виктор Александрович';
$firstLength = LABWORK . $numberLab;
$secondLength = COMPLETED . $group;
$thirdLength = $student;
//Определим максимальную длину строки
$maxLine = max(iconv_strlen($firstLength), iconv_strlen($secondLength), iconv_strlen($thirdLength));
//Разница каждой строки с самой длинной
$firstCircle = abs(iconv_strlen($firstLength) - $maxLine);
$secondCircle = abs(iconv_strlen($secondLength) - $maxLine);
$thirdCircle = abs(iconv_strlen($thirdLength) - $maxLine);
//Первые *
$firstStar = '*';
$addStar = '*';
for ($i = 1; $i <= $maxLine; $i++) {
    $firstStar .= $addStar;
}
echo '**' . $firstStar . '*' . PHP_EOL;
//Первая строка Лаба
$firstSpace = ''; //"№" - занимает место под два символа, а по счету идет как один, поэтому убрал начальный пробел
$addSpace = ' ';
for ($i = 1; $i <= $firstCircle; $i++) {
    $firstSpace .= $addSpace;
}
echo '* ' . $firstLength . $firstSpace . '*' . PHP_EOL;
//Вторая строка Группа
$secondSpace = ' ';
for ($i = 1; $i <= $secondCircle; $i++) {
    $secondSpace .= $addSpace;
}
echo '* ' . $secondLength . $secondSpace . '*' . PHP_EOL;
//Третья строка ФИО
$thirdSpace = ' ';
for ($i = 1; $i <= $thirdCircle; $i++) {
    $thirdSpace .= $addSpace;
}
echo '* ' . $thirdLength . $thirdSpace . '*' . PHP_EOL;
//Последние *
echo '**' . $firstStar . '*' . PHP_EOL;

/*
*******************************
* Лабораторная работа № 1    *
* Выполнил(а): ст. гр. PHP-01 *
* Жмутов Виктор Александрович *
*******************************
 */
exit();
//4 Task


$circle = 100;
$i = 1;
$key = 0;
$array[$key] = 1;
while ($i <= $circle) {
    $step = 1;
    $check = 0;
    while ($i >= $step) {
        $result = $i % $step;
        // echo "$i $result  $check \n";
        $step++;
        if ($result == 0) {
            $check++;
        }
        // echo "$i $result  $check \n";
    }
    if ($check == 2) {
        $key++;
        $array[$key] = $i;
    }

    $i++;
}

var_export($array);

exit();
//3 Task

$number = 5;
$sumPart = 0;
$i = 1;
while ($i <= $number) {
    $dergee = pow($i, $i);
    $sumPart += $dergee;
    $i++;
}
echo $sumPart;

exit();

//2 Task

$array = [1, 2, 3, 4, -5, 6, 7, -8, -9, 10];

$key = 0;
foreach ($array as $number) {
    $newArray[$key] = abs($number);
    $key++;
}
var_export($newArray);

exit();

//1 Task

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$key = 0;
foreach ($array as $number) {
    if ($sum <= 10) {
        echo "$key => $number \n";
        $sum += $number;
        $newArray[$key] = $number;

        $key++;
    }
}
echo "Нужно $key первых елементов чтобы сумма получилась больше 10 ($sum)!";
