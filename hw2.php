<?php
class Worker
{
    private $name;
    private $age;
    private $salary;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}


$user1 = new Worker;       //('Vasya', 26, 2000);
$user1->setName('Иван');
$user1->setAge(25);
$user1->setSalary(1000);

//echo $user1->getName().'<br>';
//echo $user1->getAge().'<br>';
//echo $user1->getSalary().'<br>';

$user2 = new Worker;       //('Vasya', 26, 2000);
$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);

//echo $user2->getName().'<br>';
//echo $user2->getAge().'<br>';
//echo $user2->getSalary().'<br>';

$sumSalary = $user1->getSalary() + $user2->getSalary();
$sumAge = $user1->getAge() + $user2->getAge();

echo '<h3>Задача №2</h3><br>';
echo 'Сумма зарплат: ' . $sumSalary . '<br>' . 'Сумма возрастов: ' . $sumAge;


//$SumAge = $worker1->age + $worker2->age;
//$SumSalary = $worker1->salary + $worker2->salary;

//echo $SumAge . '<br>';
//echo $SumSalary;

