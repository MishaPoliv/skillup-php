<?php

require_once 'SmartForm.php';
$form = new SmartForm();
echo $form->open(['action'=>'index.php', 'method'=>'POST']) . '<br>';
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']) . '<br>';
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']) . '<br>';
echo $form->textarea([
        'name'=>'about', 'value' => 'Напишите что-то о себе',
        'cols' => '80', 'rows' => 10,
    ]) . '<br>';
echo $form->submit(['value'=>'Отправить']);
echo $form->close();