<?php
class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker;
$worker1->name = 'Ivan';
$worker1->age = 25;
$worker1->salary = 1000;


$worker2 = new Worker;
$worker2->name = 'Vasya';
$worker2->age = 26;
$worker2->salary = 2000;


$sumAge = $worker1->age+$worker2->age;
$sumSalary = $worker1->salary+$worker2->salary;

echo '<h3>Задача №1</h3><br>';
echo 'Сумма зарплат: ' . $sumSalary . '<br>';
echo 'Сумма возрастов: ' . $sumAge ;




