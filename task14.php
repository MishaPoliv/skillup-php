<?php
$num = 1000;
$i=0;

while ($num >= 50) {
    $num /= 2;
    $i++;
}
echo $num.'<br>'.$i.'<hr>';

for ($num = 1000, $i=0; $num >= 50; $num/=2, $i++);
echo $num.'<br>'.$i;