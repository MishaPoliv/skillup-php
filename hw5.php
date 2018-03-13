<?php

class User
{
    protected $name;
    protected $age;

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

}

class Worker extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}

$user1 = new Worker('Иван', 25, 1000);
$user2 = new Worker('Вася', 26, 2000);


$SumSalary = $user1->getSalary() + $user2->getSalary();


echo '<h3>Задача №5</h3><br>';
echo $SumSalary;

class Student extends User
{

    private $grant;
    private $course;

    public function getGrant()
    {
        return $this->grant;
    }

    public function setSalary($grant)
    {
        $this->grant = $grant;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

}

