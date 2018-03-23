<?php

try {

$pdo = new PDO('mysql:host=localhost;dbname=Misha;charset=utf8','Misha','root');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<h2>'.'Login success!'.'</h2>';
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

$sql = "SELECT * FROM slim_users ORDER BY username DESC";
// $sql = "SELECT id, name FROM slim_users WHERE username = 'user1'(фильтр по юсер1) ORDER BY username DESC(сортировка, DESC - от Я до А)";
$result = $pdo->query($sql);

//foreach($result as $row) {
while($row = $result->fetch( PDO::FETCH_OBJ)) {
    var_dump($row);
//echo "<p>".$row['id']." | ".$row['username'];

}

//Добавление в таблицу информации
//$sql = "INSERT INTO slim_users (username,zp) VALUES ('user3','1000'), ('user5','1500')";
//$affectedRows = $pdo->exec($sql);
//var_dump($affectedRows);

$users = ['user13', 'user14', 'user15'];
//$sql = "INSERT INTO slim_users (username) VALUES (:user)";
$query = $pdo->prepare($sql);

foreach ($users as $user) {

   $query->bindParam('user',$user);
   $query->execute();
    $lastId = $pdo->lastInsertId();
echo 'Пользователь '.$user. ' вставлен id = '. $lastId.'<br>';

}
