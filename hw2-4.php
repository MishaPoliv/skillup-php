<?php


// Задача №4 Сделайте счетчик обновления страницы пользователем.
// Данные храните в сессии. Скрипт должен выводить на экран количество обновлений.
// При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.

$_SESSION['$NumberInputs'] = 0;
$Message = 'Вы еще не обновляли страницу';

session_start();

if ($_SESSION['$NumberInputs'] == 0) {

    echo $Message;

} else {

    $_SESSION['$NumberInputs'] = $_SESSION['$NumberInputs'] + 1;

    echo 'Number of Entry: "'.  $_SESSION['$NumberInputs'].'"';
}
