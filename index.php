<?php

require 'TagA.php';
require 'TagUl.php';

//echo Tag::getClassDescription(). '<br>';

$google = new TagA;
$google
    ->setText('V google')
    ->setHref('https://google.com')
    ->setTargetBlank();

echo $google->show();


$list = new TagUl();
$list
    ->addItem('1th items')
    ->addItem('2th items')
    ->addItem('3th items')
    ->addItem('4th items')
    ->addItem('5th items');

echo $list->show();