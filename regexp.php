<?php


$word = 'Текст или не текст\\\\\\\\!';

//echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'maqil@mail.ru');

$red1 = str_replace('текст\\', 'Text', $word);
$red2 = str_replace('не', 'NO', $word);


echo $red1. '<br>'. $red2 . '<br>';


echo str_replace('#^[a-z]#', '#^[A-Z]#' ,'N R T r e N r sdwr') ;