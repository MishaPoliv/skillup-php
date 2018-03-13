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

    private function checkAge($age)
    {
        if ($age < 100) {
            if ($age > 1) {
                return true;
            } } else {
            return false;
        }
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

$user1 = new Worker;
$user1->setName('Иван');
$user1->setAge(150);
$user1->setSalary(1000);

$user2 = new Worker;
$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);


$sumSalary = $user1->getSalary() + $user2->getSalary();
$sumAge = $user1->getAge() + $user2->getAge();

echo '<h3>Задача №3</h3><br>';
echo 'Сумма зарплат: ' . $sumSalary . '<br>' . 'Сумма возрастов: ' . $sumAge;



