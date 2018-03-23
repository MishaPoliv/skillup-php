<?php

// Задача 2 Дана строка 'aba aca aea abba adca abea'.
// Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.

echo str_replace('abba', '!', 'aba aca aea abba adca abea'). '<br>';
echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea'). '<br>';

echo str_replace('adca', '!', 'aba aca aea abba adca abea'). '<br>';
echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea'). '<br>';

echo str_replace('abea', '!', 'aba aca aea abba adca abea'). '<br>';
echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea'). '<br>'. '<br>';

// Задача 5 Дана строка 'aa aba abba abbba abca abea'.
// Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону:
// буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.

echo str_replace('aa', 'a', 'aa aba abba abbba abca abea'). '<br>';
echo str_replace('aba', 'a', 'aa aba abba abbba abca abea'). '<br>';
echo str_replace('abba', 'a', 'aa aba abba abbba abca abea'). '<br>';
echo str_replace('abbba', 'a', 'aa aba abba abbba abca abea'). '<br>'. '<br>';

// Задача 9 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.

echo str_replace('2+3', 'найдено!', '2+3 223 2223'). '<br>'. '<br>';

// Задача 14 Дана строка 'aba accca azzza wwwwa'.
// Напишите регулярку, которая найдет все строки по краям которых
// стоят буквы 'a', и заменит каждую из них на '!'.
// Между буквами a может быть любой символ (кроме a).

echo str_replace('a', '!', 'aba accca azzza wwwwa'). '<br>'. '<br>';