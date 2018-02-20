<?php
$a = 'World'; // /* */      // https://sourceforge.net/projects/xampp/?source=typ_redirect xampp portable

echo "Hi, $a".'<br>';                  // Hi, world
    echo 'Hi $a'.'<br>';               // Hi $a
        echo 'Hi '.$a.'<br>';    // Hi world


if ($a = $a) echo 'Верно!'; else echo 'Неверно!';




$arr = [10, -2, 100, -44, 1];
$sum = 0;

foreach ($arr as $item) {
    if ($item > 0) {
        $sum += $item;
    }
}
echo $sum;

