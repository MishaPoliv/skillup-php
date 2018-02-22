<?php
echo 'Задача 1';
echo '<br>';
// Задача № 1
//Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach
//найдите сумму квадратов элементов этого массива.
//Результат запишите переменную $result.


$mass = [1, 2, 3, 4, 5];
$result = 0;


foreach ($mass as $item) {
        $result += $item*$item;
    }
echo $result;


echo '<br>';
echo 'Задача 2';
echo '<br>';
// Задача № 2
//Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'.
// С помощью цикла foreach выведите на экран столбец строк
// такого формата: 'Коля - зарплата 200 долларов.'.

$arr = ['Коля'=>200, 'Вася'=>300, 'Петя'=>400];

foreach ($arr as $name=>$money) {
    echo $name. ' - зарплата '  .$money.  ' долларов <br>';
}


echo '<br>';
echo 'Задача 3';
echo '<br>';
// Задача № 3
// Составьте массив дней недели.
// С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
// Текущий день должен храниться в переменной $day.
date_default_timezone_set('UTC');


$week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

foreach ($week as $allday) {

        if ($allday <> date("l")) {
            echo '<br>'.$allday.'<br>';

        }
        else {
            $day = $allday;
        echo "<i><br>$day!<br></i>";  }
}


echo '<br>';
echo 'Задача 4';
echo '<br>';
// Задача № 4
//Дан массив $arr. С помощью цикла foreach запишите английские названия
// в массив $en, а русские - в массив $ru.
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

$en = array();
    foreach ($arr as $eng=>$rus) {
        $en[] = $eng;
}

$ru = array();
    foreach ($arr as $eng=>$rus) {
        $ru[] = $rus;
}

var_dump ($en);
        echo '<br>';
var_dump ($ru);


//  $ru[] = (array_keys($arr));      <<< или так? 78строка
//  $en[] = (array_values($arr));    <<< или так? 69строка