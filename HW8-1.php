<?php


?>




<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Homework</title>
    <style>
        body{
            font-family: "Times New Roman";
            color: greenyellow;
            background: #002200;
        }
        h2{
            text-align: center;
        }
        table {
            text-align: center;
            font-family: Corbel;
            font-size: 18pt;
        }
    </style>

</head>
<body>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="https://github.com/MishaPoliv/skillup-php/blob/Homework8/HW8-2.php">Второе задание</a></li>
    </ol>
</nav>



<h2>Пользователи которые зарегестрированы у нас и их пароли:</h2>


<table border="3px" bordercolor="yellow" bgcolor="black" align="center" width="500px" height="100%">


    <tr>
        <td>
            <?php

        $section = file_get_contents('./users.txt',NULL, NULL, 0);
        var_dump($section);
            ?>

        </td>
    </tr>


</table>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
