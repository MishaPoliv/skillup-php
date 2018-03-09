<?php

class User
{
    protected $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function setName($name)
    {
        $this->name=$name;
    }

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function getAge($age)
    {
        return $this->age = $age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function addYearsToAge($years)
    {
        $this->age += $years;
    }
}

class Worker extends User {
    private $salary;

    public function __construct($name, $age, $salary)
    {
        parent::__construct($name, $age);
        $this->name=$name;
        $this->salary = $salary;
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

$customer = new User('Kola', 25);


$customer2 = new User ('Vasa', 30);


$worker = new Worker ('Ivan', 35, 20000);
$worker->setSalary(20000);
$worker ->setAge(30);





//echo $customer->name;
//echo $customer->age;

//echo $customer2->name;
//echo $customer2->age;

//echo $customer->age . ' ';
//$customer>addYearsToAge(10);
//echo $customer->age;