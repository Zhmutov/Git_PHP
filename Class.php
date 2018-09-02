<?php
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