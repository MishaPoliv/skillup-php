<?php
//Задача 3 Установите куку с именем age.
// Запишите туда случайное число от 10 до 70 (с помощью mt_rand).
// Сделайте так, чтобы эта кука установилась на 1 час, на 3 часа, на 1 день, на год, на 10 лет,
// до конца текущего дня, до конца текущего года.

$age = mt_rand(10,70);

setcookie('age', $age, time()+3600);
setcookie('age1', $age, time()+3600*3);
setcookie('age2', $age, time()+3600*24);
setcookie('age3', $age, time()+3600*24*30*365);
setcookie('age4', $age, time()+3600*24*30*365*10);



// Задача 6 Сделайте счетчик посещения сайта посетителем.
// Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.

$Number = 1;
setcookie('Number', $Number);

if ($Number <> 0)
{
    $Number = $_COOKIE['Number'] + 1;
    setcookie('Number', $Number);
    echo 'Вы посетили наш сайт '. $_COOKIE['Number'] .'-й раз!' .'<br>' .'<br>';
}


// Задача 7 Покажите пользователю баннер с кнопкой 'Не показывать больше!'.
// Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.

//Вставляем баннер с jQuery, добавляем флаг = 0 в "закрытие", по 1му клику на "крестик" флаг делаем = 1,
// этот флаг передаём в куку, если значение 1, то банер не показываеться...
?>
<br>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork for Hide Button</title>
    </head>
<body>

<?php


$flag = 0;
if ($_COOKIE['flag'] == 1) { }
    else {setcookie('flag', $flag, time()+3600);}
if ($_COOKIE['flag'] == 0)
{
    ?>    <a href="" target=""><button>Непоказывать больше!</button></a>   <?php

    $flag = 1;
    setcookie('flag', $flag, time()+3600);
 //   echo $_COOKIE['flag']  .'<br>';

} else {

}
?>



</body>
</html>
