<?php
//Задача №5  Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.

$time = time() - mktime(7, 23, 48);
echo floor($time / (60 * 60)) . '<br>';


//Задача №9 Создайте массив дней недели $week. Выведите на экран название текущего дня
// недели с помощью массива $week и функции date.
// Узнайте какой день недели был 06.06.2006, в ваш день рождения.

$week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
echo $week[date('w',  mktime(0, 0, 0, 6, 6, 2006))] . '<br>';


//Задача №12 Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.
?>
<form action="" method="GET">
	<input type="text" name="year">
	<input type="submit">
</form>
<?php
    if (isset($_REQUEST['year'])) {
         $year = $_REQUEST['year'];
    if (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1) {
         echo 'год высокосный';
    } else {
         echo 'год не высокосный';
           }
    }
echo '<br>';


//Задача №18 В переменной $date лежит дата в формате '2025-12-31'.
// Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.

//    $date = mktime(0, 0, 0, 12, 31, 2025);
//    echo $date + mktime(0,0,0,1, 2) . '<br>';
//    echo $date + mktime(0,0,0, 0,3 ,1);


    $date =  date_create('2025-12-31');
date_modify($date, '2 day');
echo date_format($date, 'd.m.Y'). '<br>';


    $date =  date_create('2025-12-31');
date_modify($date, '1 month 3 day');
echo date_format($date, 'd.m.Y'). '<br>';


    $date =  date_create('2025-12-31');
date_modify($date, '1 year');
echo date_format($date, 'd.m.Y'). '<br>';


    $date =  date_create('2025-12-31');
date_modify($date, '-3 day');
echo date_format($date, 'd.m.Y'). '<br>'.'<br>';


//Задача №19 Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.

$dayToNY = mktime(23,59,59, 12,31);
$dayToNY = $dayToNY + mktime(1,0,1,1,1,1970);;
$today = mktime();
echo floor(($dayToNY-$today)/(60*60*24)).'<br>';