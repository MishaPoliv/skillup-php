<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
$errorMessage = '';
if (isset($_POST['user'])){
    $_POST['user'] = trim($_POST['user']);
        if (empty($_POST['user'])) {
          header('Location: failed.php');
    }
    if (!$errorMessage) {
        if (file_exists('subscribers.txt')) {
            $users = explode("\n", file_get_contents('subscribers.txt'));
            $users = array_filter($users, function ($item) {
                return trim($item);
            });
        } else {
            $users = [];
        }
        $users = array_map(function ($item) {
            return explode("\t", $item);
        }, $users);
        $userExists = false;
        foreach ($users as $userData) {
            if ($_POST['user'] == $userData[0]) {
                $userExists = true;
                break;
            }
        }
        if ($userExists){
            $errorMessage = 'Пользователь "' . $_POST['user']. '" уже зарегестрировался.';
        }
    }
    if (!$errorMessage) {
        $users[] = [$_POST['user']];
        $users = array_map(function ($item){
            return implode("\t", $item);
        }, $users);
        file_put_contents('subscribers.txt', implode("\n", $users));
       // header('Location: success.php');
        exit();
    }
}
if ($errorMessage) {
    echo $errorMessage;
}


?>
     <h3>
<form action="" method="POST">
    Подписка: <br>
    @mail: <input type="text" name="user" value="<?=isset($_POST['user']) ? $_POST['user'] : ''?>"><br>
        <input type="submit" value="Subscribe">
</form>
    </h3>

