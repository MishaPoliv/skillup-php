<?php
class Worker
{
    private $name;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
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

$user = new Worker('Дима', 25, 1000);

$AgeMinusSalary = $user->age * $user->getSalary();

echo '<h3>Задача №4</h3><br>';
echo 'Произведение = ' . $AgeMinusSalary;