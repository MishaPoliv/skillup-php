<?php
class Form

{



}


echo $form->input(['type'=>'text', 'value'=>'!!!']);
//Код выше выведет <input type="text" value="!!!">

echo $form->password(['value'=>'!!!']);
//Код выше выведет <input type="password" value="!!!">

echo $form->submit(['value'=>'go']);
//Код выше выведет <input type="submit" value="go">

echo $form->textarea(['placeholder'=>'123', 'value'=>'!!!']);
//Код выше выведет <textarea placeholder="123">!!!</textarea>

echo $form->open(['action'=>'index.php', 'method'=>'POST']);
//Код выше выведет <form action="index.php" method="POST">

echo $form->close();
//Код выше выведет </form>