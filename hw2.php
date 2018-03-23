<?php

// Задача №3 Спросите у пользователя email с помощью формы. Затем сделайте так,
// чтобы в другой форме (поля: имя, фамилия, пароль, email)
// при ее открытии поле email было автоматически заполнено.
?>

    <form action="" method="GET">
        <input type="text" name="email">
        <input type="submit"> your email
    </form> <br> <br>

<?php
   $email = $_REQUEST['email'];

    ?>

    <form action="" method="GET">
        <input type="text" name="Name">
        <input type="submit"> Name
    </form>

    <form action="" method="GET">
        <input type="text" name="2d-Name">
        <input type="submit"> 2d-name
    </form>

    <form action="" method="GET">
        <input type="text" name="password">
        <input type="submit"> Password
    </form>

    <form action="" method="GET">
        <input type="text" name="email" value="<?php echo $email ?>">
        <input type="submit"> email
    </form>

<br> <br>

