<?php

// Выбрать работника с id = 3.
$query = "SELECT * FROM workers WHERE id=3";
//Выбрать работников с зарплатой 1000$.
$query = "SELECT * FROM workers WHERE salary=1000";
//Выбрать работников в возрасте 23 года.
$query = "SELECT * FROM workers WHERE age=23";
//Выбрать работников с зарплатой более 400$
$query = "SELECT * FROM workers WHERE salary>400";
//Выбрать работников с зарплатой равной или большей 500$
$query = "SELECT * FROM workers WHERE salary<=500";
//Выбрать работников с зарплатой НЕ равной 500$.
$query = "SELECT * FROM workers WHERE salary<>500";
//Выбрать работников с зарплатой равной или меньшей 900$.
$query = "SELECT * FROM workers WHERE salary<=900";
//Узнайте зарплату и возраст Васи.
$query = "SELECT * FROM workers WHERE name='Вася'";


//Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
$query = "SELECT * FROM workers WHERE age>25 AND age<=3";
//Выбрать работника Петю.
$query = "SELECT * FROM workers WHERE name='Петя'";
//Выбрать работников Петю и Васю.
$query = "SELECT * FROM workers WHERE name='Петя' AND name='Вася'";
//Выбрать всех, кроме работника Петя.
$query = "SELECT * FROM workers WHERE name!='Петя'";
//Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
$query = "SELECT * FROM workers WHERE salary=1000 OR age=27";
//Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.
$query = "SELECT * FROM workers WHERE salary=1000 OR age>23 AND age<27";
//Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.
$query = "SELECT * FROM workers WHERE salary>400 AND salary<1000 OR age>23 AND age<27";
//Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
$query = "SELECT * FROM workers WHERE salary!=400 OR age=27";


//Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.
$query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
//Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.
$query = "INSERT INTO workers (name, salary) VALUES ('Светлана', 1200)";
//Добавьте двух новых работников одним запросом:
// Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.
$query = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), VALUES ('Петя', 31, 1000)";

//Удалите работника с id=7.
$query = "DELETE FROM workers WHERE id = 7";
//Удалите Колю.
$query = "DELETE FROM workers WHERE name = 'Коля'";
//Удалите всех работников, у которых возраст 23 года.
$query = "DELETE FROM workers WHERE age=23";

//Поставьте Васе зарплату в 200$.
$query = "UPDATE workers SET salary = 200 WHERE name = 'Вася'";
//Работнику с id=4 поставьте возраст 35 лет.
$query = "UPDATE workers SET age = 35 WHERE id = 4";
// Всем, у кого зарплата 500$ сделайте ее 700$.
$query = "UPDATE workers SET salary=700 WHERE salary = 500";
//Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
$query = "UPDATE workers SET age = 23 WHERE id > 2 AND id < 5";
//Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.
$query = "UPDATE workers SET salary=900 WHERE name = 'Вася' AND name = 'Женя'";