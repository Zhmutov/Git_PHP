<?php
//6 Task

class Show
{
    public $linkShow;

    function show()
    {
        echo "<a $this->linkShow</a>";
    }
}

class Attr
{
    public $link;

    function setAttr($x,$y)
    {
        $res = "$x =\"$y\">$this->link";
        $show = new Show();
        $show->linkShow = $res;
        return $show;
    }
}

class Tag
{
    function setText($link)
    {
        $attr = new Attr();
        $attr->link = $link;
        return $attr;
    }
}

$tag = new Tag();
$tag->setText("cсылка")->setAttr('href', 'index.html')->Show();
exit();

?>



<form>


    <meta charset="UTF-8">
    <?php
    $save = $_GET['save'] ?: '';
    $write = $_GET['write'] ?: '';
    $clear = $_GET['clear'];

    ?>
    <center>
        Сохранить в Лог: <input type='text' name='save' value=<? $save ?>>
        <input type='submit'>
        </br>
        </br>
        Считать последние записи:<input type='text' name='write' value=<? $write ?>>
        <input type='submit'>
        </br>
        </br>
        </br>
        </br>
        </br>

        <input type='submit' name="clear" value="Очистить лог!">
    </center>
    </br>


</form>

<?php

class Log
{
    private $file;

    function __construct()
    {
        $this->file = fopen('log.txt', 'a');
    }

    public function saveToLog($str)
    {
        if (!empty($str)) {

            fwrite($this->file, "\n $str ");
            echo "<center>$str  Save! \n</center>";
        }
    }

    public function writeFromLog($countNeed)
    {
        if (!empty($countNeed)) {
            $open = file('log.txt');
            if (!empty($open)) {

                $count = count($open);
                $startColumn = $count - $countNeed;
                $i = 0;
                foreach ($open as $value) {
                    if ($startColumn <= $i) {
                        $newArray[] = $value;
                    }
                    $i++;
                }

                foreach ($newArray as $result) {
                    echo "<center>$result  \n</center>";
                }
            } else {
                echo 'Log Пустой!' . PHP_EOL;
            }
        }
    }

    public function clearLog($clear)
    {
        if (!empty($clear)) {

            fopen('log.txt', 'w+');
            echo "<center>Log Очищено!</center>";
        }
    }
}

$object = new Log();
$save = $object->saveToLog($save);
$write = $object->writeFromLog($write);
$clear = $object->clearLog($clear);



exit();

//4 Task


class Worker
{
    private $name;
    private $salary;
    public $age;

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$object = new Worker('Dima', 1000, 25);
echo $object->getName() . PHP_EOL;
echo $object->getSalary();

exit();

//3 Task

class Worker
{
    private $name;
    private $age;
    private $salary;
    private $newAge;

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if (isset($this->age)) {
            return $this->checkAge($age);
        } else {
            return $this->age = $age;
        }
    }

    private function checkAge($check)
    {

        if (1 <= $check && $check <= 100) {
            return $this->age = $check;
        } else {
            return $this->age;
        }

    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$ivan = new Worker();
$nameIvan = $ivan->setName('Ivan');
$ageIvan = $ivan->setAge(25);
$salaryIvan = $ivan->setSalary(1000);

$vasya = new Worker();
$nameVasya = $vasya->setName('Vasya');
$ageVasya = $vasya->setAge(26);
$salaryVasya = $vasya->setSalary(2000);

echo 'Age = ' . ($ageIvan + $ageVasya) . PHP_EOL;
echo 'Salary = ' . ($salaryIvan + $salaryVasya) . PHP_EOL;
echo $ivan->setAge(111) . PHP_EOL;


exit();

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$ivan = new Worker();
$nameIvan = $ivan->setName('Ivan');
$ageIvan = $ivan->setAge(25);
$salaryIvan = $ivan->setSalary(1000);

$vasya = new Worker();
$nameVasya = $vasya->setName('Vasya');
$ageVasya = $vasya->setAge(26);
$salaryVasya = $vasya->setSalary(2000);

echo 'Age = ' . ($ageIvan + $ageVasya) . PHP_EOL;
echo 'Salary = ' . ($salaryIvan + $salaryVasya);

exit();

//1 Task
class Worker
{
    public $name;
    public $age;
    public $salary;
}

$ivan = new Worker();
$nameIvan = $ivan->name = 'Ivan';
$ageIvan = $ivan->age = 25;
$salaryIvan = $ivan->salary = 1000;

$vasya = new Worker();
$nameVasya = $vasya->name = 'Vasya';
$ageVasya = $vasya->age = 26;
$salaryVasya = $vasya->salary = 2000;

echo 'Age = ' . ($ageIvan + $ageVasya) . PHP_EOL;
echo 'Salary = ' . ($salaryIvan + $salaryVasya);


exit();

class Computer
{
    const IS_DESKTOP = true;
    var $cpu;
    var $ram;
    var $video;
    var $memory;
    var $isWorking = false;

    function start()
    {
        $this->isWorking = true;
        echo 'Computer is working' . PHP_EOL;
    }

    function shutDown()
    {
        $this->isWorking = false;
        echo 'Computer is off' . PHP_EOL;
    }

    function restart()
    {
        if ($this->isWorking) {
            $this->shutDown();
            for ($timer = 5; $timer > 0; $timer--) {
                echo '.';
                sleep(1);
            }
            echo PHP_EOL;
            $this->start();
        } else {
            echo 'Computer must be turned on for restart' . PHP_EOL;
        }
    }
}

$computer = new Computer();

$computer->start();
$computer->restart();
$computer->shutDown();
$computer->restart();